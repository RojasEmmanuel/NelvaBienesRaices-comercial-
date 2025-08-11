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


$routes->get('real-campestre', 'fraccionamientos\RealCampestreController::index');
$routes->get('nura', 'fraccionamientos\NuraController::index');
$routes->get('andromeda', 'fraccionamientos\AndromedaController::index');
$routes->get('el-jicaro', 'fraccionamientos\ElJicaroController::index');
$routes->get('oceanica', 'fraccionamientos\OceanicaController::index');
$routes->get('el-santuario-de-las-tortugas', 'fraccionamientos\ElSantuarioDeLasTortugasController::index');
$routes->get('nyssa', 'fraccionamientos\NYSSAController::index');
$routes->get('sicaru', 'fraccionamientos\SicaruController::index');
$routes->get('zull', 'fraccionamientos\ZullController::index');

$routes->get('inversiones-mazunte', 'inversionesController::mazunte');
$routes->get('inversiones/tonameca', 'inversionesController::tonameca');
$routes->get('inversiones/salina-cruz', 'inversionesController::salinaCruz');