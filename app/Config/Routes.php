<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//API
$routes->group('api', function($routes) {
    $routes->post('users/register', 'Api\UsersController::register');
    $routes->post('users/login', 'Api\UsersController::login');
    $routes->get('users/(:num)', 'Api\UsersController::getUser/$1'); // Route to get user data by ID
    $routes->put('users/(:num)', 'Api\UsersController::editUser/$1'); // Route to edit user data by ID
});