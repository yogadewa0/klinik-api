<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//API
$routes->group('api', function($routes) {
    //User Management
    $routes->post('users/register', 'Api\UsersController::register');
    $routes->post('users/login', 'Api\UsersController::login');
    $routes->get('users/(:num)', 'Api\UsersController::getUser/$1');
    $routes->put('users/(:num)', 'Api\UsersController::editUser/$1');

    //Obat Management
    $routes->resource('obat', ['controller' => 'Api\ObatController']);
});