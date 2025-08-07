<?php
/**
 * Script para ejecutar desde cron job
 * Ejemplo: 0 3 * * * /usr/bin/php /ruta/a/tu/sitio/cron_actualizar_fotos.php
 */

require __DIR__ . '/vendor/autoload.php';

$app = Config\Services::codeigniter();
$app->initialize();

$controller = new App\Controllers\ActualizarFotos();
$response = $controller->index();

// Opcional: Enviar email con resultados
if (isset($response->getJSON()['errors']) && $response->getJSON()['errors'] > 0) {
    mail('admin@tusitio.com', 'Error al actualizar fotos de asesores', print_r($response->getJSON(), true));
}