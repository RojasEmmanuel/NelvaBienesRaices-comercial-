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
$routes->get('Nura', 'NuraController::index');
$routes->get('Andromeda', 'AndromedaController::index');