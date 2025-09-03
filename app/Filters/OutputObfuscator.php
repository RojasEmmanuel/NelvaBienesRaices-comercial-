<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class OutputObfuscator implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Nada que hacer antes de la petición
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $output = $response->getBody();

        // 🔹 1. Eliminar comentarios HTML
        $output = preg_replace('/<!--.*?-->/s', '', $output);

        // 🔹 2. Minificar HTML
        $output = preg_replace('/\s+/', ' ', $output);
        $output = preg_replace('/>\s+</', '><', $output);

        // 🔹 3. Minificar CSS embebido
        $output = preg_replace_callback('/<style\b[^>]*>(.*?)<\/style>/is', function($matches) {
            $css = $matches[1];
            $css = preg_replace('/\/\*.*?\*\//s', '', $css); // quitar comentarios
            $css = preg_replace('/\s+/', ' ', $css);
            return "<style>{$css}</style>";
        }, $output);

        // 🔹 4. Ofuscar JS embebido
        $output = preg_replace_callback('/<script\b[^>]*>(.*?)<\/script>/is', function($matches) {
            $js = $matches[1];
            $js = preg_replace('/\/\/[^\n]*/', '', $js);  // quitar comentarios de línea
            $js = preg_replace('/\/\*.*?\*\//s', '', $js); // quitar comentarios de bloque
            $js = preg_replace('/\s+/', ' ', $js);         // compactar espacios
            $encoded = base64_encode($js);
            return "<script>eval(atob('{$encoded}'))</script>";
        }, $output);

        $response->setBody($output);
    }
}
