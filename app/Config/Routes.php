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


// Auth Routes
$routes->get('/login', 'AuthController::user_login');
$routes->post('/login', 'AuthController::process_login');


$routes->get('/signin', 'AuthController::user_register');
$routes->post('/signin', 'AuthController::process_register');

$routes->get('/logout', 'AuthController::logout');


// User Routes
$routes->get('/user-page', 'Home::user_page');
$routes->post('/user-page', 'Home::vote_logic'); // Route for voting action


// Admin Routes
$routes->get('/management', 'AdminController::management');

$routes->get('/voters', 'AdminController::voters');
$routes->get('/voters/delete/(:num)', 'AdminController::deleteVoter/$1');

$routes->get('/results', 'AdminController::results');

$routes->get('/candidates', 'AdminController::candidates');
$routes->get('/candidate/delete/(:num)', 'AdminController::deleteCandidate/$1');

$routes->get('/elections', 'AdminController::elections');
$routes->post('/elections/add', 'AdminController::createElection');
$routes->post('/elections/update/(:num)', 'AdminController::updateElection/$1');
$routes->get('/elections/delete/(:num)', 'AdminController::deleteElection/$1');
