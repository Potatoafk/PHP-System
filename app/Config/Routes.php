<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::admin');
$routes->get('/candidates_view', 'Home::candidates');
// $routes->get('/admin/admin-dashboard/', 'AdminController::admin');
