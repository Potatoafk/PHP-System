<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\AdminController;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */


 // CONTROLLERS ARE ( TEMPORARY [for testing purposes] --> Home <-- Controller )


// landing page
$routes->get('/', 'Home::index'); // Default route to the home page


// Auth User Routes
$routes->get('/login', 'AuthController::user_login');
$routes->post('/login', 'AuthController::process_login');

$routes->get('/signin', 'AuthController::user_register');
$routes->post('/signin', 'AuthController::process_register');

$routes->get('/logout', 'AuthController::logout');




// User Routes
$routes->get('/user-page', 'Home::user_page');
$routes->post('/user-page', 'Home::vote_logic'); // Route for voting action

$routes->post('update-profile', 'Home::updateProfile'); // Route for updating user profile



// Admin Routes
$routes->get('/admin', 'AuthController::admin_login'); // Admin dashboard route
$routes->post('/admin/login', 'AuthController::process_admin_login'); // Admin login processing route

$routes->get('/management', 'AdminController::management');

$routes->get('/voters', 'AdminController::voters');
$routes->post('/voters/update/(:num)', 'AdminController::updateVoter/$1');
$routes->get('/voters/delete/(:num)', 'AdminController::deleteVoter/$1');

$routes->get('/results', 'AdminController::results');

$routes->get('/candidates', 'AdminController::candidates');
$routes->post('/candidates/add', 'AdminController::createCandidate');
$routes->get('/candidate/delete/(:num)', 'AdminController::deleteCandidate/$1');
$routes->post('/candidates/update/(:num)', 'AdminController::updateCandidate/$1');

$routes->get('/elections', 'AdminController::elections');
$routes->post('/elections/add', 'AdminController::createElection');
$routes->post('/elections/update/(:num)', 'AdminController::updateElection/$1');
$routes->get('/elections/delete/(:num)', 'AdminController::deleteElection/$1');

// Admin Logout
$routes->get('/admin/logout', 'AuthController::admin_logout'); // Admin logout route
