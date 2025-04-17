<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;

/**
 * @var RouteCollection $routes
 */


// landing page
$routes->get('/', 'Home::index');


// Auth Routes
$routes->get('/login', 'AuthController::user_login');
$routes->get('/register', 'AuthController::user_register');
// $routes->get('/logout', 'AuthController::logout');


// Admin Routes
$routes->get('/admin_dashboard', 'Candidates::admin_dashboard');
$routes->get('/admin/candidates_view', 'Candidates::candidates_view');


// User Routes
$routes->group('user', function($routes) {
    $routes->get('', 'User::user');
    // $routes->get('login', 'User::login');
    // $routes->get('register', 'User::register');
    // $routes->get('dashboard', 'User::dashboard');
    // $routes->get('candidates', 'User::candidates');
    // $routes->get('logout', 'User::logout');
    // $routes->get('profile', 'User::profile');
    // $routes->get('edit_profile', 'User::edit_profile');
    // $routes->get('vote', 'User::vote');
});