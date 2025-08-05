<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('servicios', 'ServiciosController::index');
$routes->get('atractivos', 'AtractivosController::index');
