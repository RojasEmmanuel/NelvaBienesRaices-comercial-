<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class OutputObfuscator implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null) {}

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Solo en producción y solo HTML
        if (defined('CI_ENVIRONMENT') && 'CI_ENVIRONMENT' !== 'production') return;
        $ctype = $response->getHeaderLine('Content-Type');
        if (stripos($ctype, 'text/html') === false) return;

        $html = $response->getBody();
        if ($html === '' || $html === null) return;

        // 1) Extraer <script> y <style> a placeholders
        $scripts = [];
        $styles  = [];

        $html = preg_replace_callback('/<script\b[^>]*>.*?<\/script>/is',
            function($m) use (&$scripts){
                $key = '%%SCRIPT_' . count($scripts) . '%%';
                $scripts[$key] = $m[0];
                return $key;
            }, $html);

        $html = preg_replace_callback('/<style\b[^>]*>.*?<\/style>/is',
            function($m) use (&$styles){
                $key = '%%STYLE_' . count($styles) . '%%';
                $styles[$key] = $m[0];
                return $key;
            }, $html);

        // 2) Minificar HTML (sin tocar script/style)
        // Quitar comentarios HTML (mantener condicionales IE por si acaso)
        $html = preg_replace('/<!--(?!\[if).*?-->/s', '', $html);
        // Colapsar espacios entre etiquetas
        $html = preg_replace('/>\s+</', '><', $html);
        // Opcional: colapsar espacios múltiples fuera de etiquetas es riesgoso, lo evitamos

        // 3) Minificar CSS embebido
        foreach ($styles as $k => $styleTag) {
            $css = preg_replace('/^<style\b[^>]*>|<\/style>$/i', '', $styleTag);
            $css = preg_replace('/\/\*.*?\*\//s', '', $css);     // quitar /* ... */
            $css = preg_replace('/\s+/', ' ', $css);             // colapsar espacios
            $styles[$k] = '<style>' . trim($css) . '</style>';
        }

        // 4) Minificar JS embebido SIN romper comentarios //
        foreach ($scripts as $k => $scriptTag) {
            $open  = [];
            preg_match('/^<script\b[^>]*>/i', $scriptTag, $open);
            $close = '</script>';

            $js = preg_replace('/^<script\b[^>]*>|<\/script>$/i', '', $scriptTag);

            // Quitar comentarios de bloque de forma segura
            $js = preg_replace('/\/\*.*?\*\//s', '', $js);

            // Colapsar espacios manteniendo saltos de línea:
            // [^\S\r\n] = espacios/tabuladores PERO no \r ni \n
            $js = preg_replace('/[^\S\r\n]+/', ' ', $js);
            // Limpiar espacios al inicio/fin de línea
            $js = preg_replace('/^[ \t]+|[ \t]+$/m', '', $js);

            // NO eliminar // líneas ni \n para no romper nada
            $scripts[$k] = ($open[0] ?? '<script>') . rtrim($js) . "\n" . $close;
        }

        // 5) Restaurar placeholders
        $html = strtr($html, $styles + $scripts);

        $response->setBody($html);
    }
}
