<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('servicios', 'ServiciosController::index');
$routes->get('atractivos', 'AtractivosController::index');
$routes->get('nosotros', 'NosotrosController::index');
$routes->get('mas', 'MasController::index');
$routes->get('contacto', 'ContactoController::index');
$routes->get('asesores', 'AsesoresController::index');


$routes->get('real-campestre', 'fraccionamientosController::realCampestre');
$routes->get('nura', 'fraccionamientosController::nura');
$routes->get('andromeda', 'fraccionamientosController::andromeda');
$routes->get('el-jicaro', 'fraccionamientosController::elJicaro');
$routes->get('oceanica', 'fraccionamientosController::oceanica');
$routes->get('el-santuario-de-las-tortugas', 'fraccionamientosController::SantuarioTortugas');
$routes->get('nyssa', 'fraccionamientosController::nyssa');
$routes->get('sicaru', 'fraccionamientosController::sicaru');
$routes->get('zull', 'fraccionamientosController::zull');

$routes->get('inversiones-mazunte', 'inversionesController::mazunte');
$routes->get('inversiones/tonameca', 'inversionesController::tonameca');
$routes->get('inversiones/salina-cruz', 'inversionesController::salinaCruz');