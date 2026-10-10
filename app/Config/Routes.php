<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
//ruta de inicio de cliente
$routes->get('/client', 'Client::index');
//ruta inicio de admin
$routes->get('/admin', 'Admin::index');
// ACTIVIDADES

$routes->get('/activities', 'Activities::index');
$routes->get('/activities/create', 'Activities::create');
$routes->post('/activities/store', 'Activities::store');
$routes->get('/activities/edit/(:num)', 'Activities::edit/$1');
$routes->post('/activities/update/(:num)', 'Activities::update/$1');
$routes->get('/activities/delete/(:num)', 'Activities::confirmDelete/$1');
$routes->post('/activities/delete/(:num)', 'Activities::delete/$1');

//ALOJAMIENTOS
$routes->get('/accommodations', 'Accommodations::index');
$routes->get('/accommodations/create', 'Accommodations::create');
$routes->post('/accommodations/store', 'Accommodations::store');
$routes->get('/accommodations/edit/(:num)', 'Accommodations::edit/$1');
$routes->post('/accommodations/update/(:num)', 'Accommodations::update/$1');
$routes->get('/accommodations/delete/(:num)', 'Accommodations::confirmDelete/$1');
$routes->post('/accommodations/delete/(:num)', 'Accommodations::delete/$1');

// Iniciar sesion
$routes->get('/auth', 'Login::index');
$routes->post('/auth/login', 'Login::login');
$routes->get('/auth/loggout', 'Login::logout');

// Registrar usuario/cliente
$routes->get('/auth/register', 'User::index');
$routes->post('/auth/store', 'User::storeUser');

// Registrar administrador
$routes->get('/admin/users/create', 'AdminUser::index');
$routes->post('/admin/users/store', 'AdminUser::storeUser');


