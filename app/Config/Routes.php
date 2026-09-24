<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/admin', 'Admin::index');

// ACTIVIDADES

$routes->get('/activities', 'Activities::index');
$routes->get('/activities/create', 'Activities::create');
$routes->post('/activities/store', 'Activities::store');
$routes->get('/activities/edit/(:num)', 'Activities::edit/$1');
$routes->post('/activities/update/(:num)', 'Activities::update/$1');
$routes->get('/activities/delete/(:num)', 'Activities::confirmDelete/$1');
$routes->post('/activities/delete/(:num)', 'Activities::delete/$1');

$routes->get('/accommodations', 'Accommodations::index');