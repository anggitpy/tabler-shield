<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/starter', 'Home::starter');

$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'chain:session, group:user|admin']);

service('auth')->routes($routes);
