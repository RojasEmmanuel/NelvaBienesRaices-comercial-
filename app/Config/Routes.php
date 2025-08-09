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


$routes->get('real-campestre', 'RealCampestreController::index');
$routes->get('nura', 'NuraController::index');
$routes->get('andromeda', 'AndromedaController::index');
$routes->get('el-jicaro', 'ElJicaroController::index');
$routes->get('oceanica', 'OceanicaController::index');
$routes->get('el-santuario-de-las-tortugas', 'ElSantuarioDeLasTortugasController::index');
$routes->get('nyssa', 'NYSSAController::index');
$routes->get('sicaru', 'SicaruController::index');