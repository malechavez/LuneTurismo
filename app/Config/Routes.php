<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'NoUser::index');

// Iniciar sesion
$routes->get('/auth', 'Login::index');
$routes->post('/auth/login', 'Login::login');
$routes->get('/auth/loggout', 'Login::logout');

// Registrar usuario/cliente
$routes->get('/auth/register', 'User::index');
$routes->post('/auth/store', 'User::storeUser');

//reservaciones
$routes->group('/client', ['filter' => 'authUser'], function ($routes) {
    $routes->get('home', 'Client::index');
    $routes->get('activityDetail/(:num)', 'Activities::detail/$1');
    $routes->get('accommodationDetail/(:num)', 'Accommodations::detail/$1');
    $routes->get('reservations/activities/(:num)', 'ReservationsActivities::create/$1');
    $routes->get('reservations/accommodatios/(:num)', 'ReservationsAccommodations::create/$1');
    $routes->get('misReservas', 'Client::myReservations');
    $routes->get('activities', 'Client::activities');
    $routes->get('accommodations', 'Client::accommodations');

    $routes->post('reservations/activities/store', 'ReservationsActivities::store');
    $routes->post('reservations/accommodatios/store', 'ReservationsAccommodations::store');
    
});


$routes->group('/admin', ['filter' => 'authAdmin'], function ($routes) {
    $routes->get('home', 'Admin::index');
    $routes->get('accommodations', 'Accommodations::index');
    $routes->get('accommodations/create', 'Accommodations::create');
    $routes->get('accommodations/edit/(:num)', 'Accommodations::edit/$1');
    $routes->get('accommodations/delete/(:num)', 'Accommodations::confirmDelete/$1');
    $routes->get('accommodations/activate/(:num)', 'Accommodations::confirmActivate/$1');
    $routes->get('activities', 'Activities::index');
    $routes->get('activities/create', 'Activities::create');
    $routes->get('activities/edit/(:num)', 'Activities::edit/$1');
    $routes->get('activities/delete/(:num)', 'Activities::confirmDelete/$1');
    $routes->get('activities/activate/(:num)', 'Activities::confirmActivate/$1');
    $routes->get('auth/loggout', 'Login::logout');
    
    $routes->get('users/create', 'AdminUser::index');
    $routes->get('users/list', 'User::list');

    $routes->post('activities/store', 'Activities::store');
    $routes->post('activities/delete/(:num)', 'Activities::delete/$1');
    $routes->post('activities/update/(:num)', 'Activities::update/$1');
    $routes->post('activities/activate/(:num)', 'Activities::activate/$1');
    $routes->post('accommodations/store', 'Accommodations::store');
    $routes->post('accommodations/update/(:num)', 'Accommodations::update/$1');
    $routes->post('accommodations/delete/(:num)', 'Accommodations::delete/$1');
    $routes->post('accommodations/activate/(:num)', 'Accommodations::activate/$1');
    

    $routes->post('users/store', 'AdminUser::storeUser');
});
