<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PrincipalController::index');
$routes->get('servicios', 'PrincipalController::servicios');
$routes->get('atractivos', 'PrincipalController::atractivos');
$routes->get('nosotros', 'PrincipalController::nosotros');
$routes->get('mas', 'PrincipalController::mas');
$routes->get('contacto', 'PrincipalController::contacto');
$routes->get('asesores', 'PrincipalController::asesores');
$routes->get('mapa-interactivo', 'PrincipalController::mapaInteractivo');


$routes->get('real-campestre', 'fraccionamientosController::realCampestre');
$routes->get('nura', 'fraccionamientosController::nura');
$routes->get('andromeda', 'fraccionamientosController::andromeda');
$routes->get('el-jicaro', 'fraccionamientosController::elJicaro');
$routes->get('oceanica', 'fraccionamientosController::oceanica');
$routes->get('el-santuario-de-las-tortugas', 'fraccionamientosController::SantuarioTortugas');
$routes->get('nyssa', 'fraccionamientosController::nyssa');
$routes->get('sicaru', 'fraccionamientosController::sicaru');
$routes->get('zull', 'fraccionamientosController::zull');
$routes->get('aguamarina', 'fraccionamientosController::aguamarina');
$routes->get('coral', 'fraccionamientosController::coral');
$routes->get('aqua', 'fraccionamientosController::aqua');
$routes->get('rompeolas', 'fraccionamientosController::rompeolas');
$routes->get('real-ventanilla', 'fraccionamientosController::realVentanilla');

$routes->get('inversiones-mazunte', 'inversionesController::mazunte');
$routes->get('inversiones/tonameca', 'inversionesController::tonameca');
$routes->get('inversiones/salina-cruz', 'inversionesController::salinaCruz');