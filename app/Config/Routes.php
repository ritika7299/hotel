<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/login', 'Login::index');

/*----admin controller section ------ */
// view routes
$routes->get('admin', 'Admin::index');
// login routes
$routes->post('admin/loginAuth', 'Admin::loginAuth');
// dashboard routes
$routes->get('admin/dashboard', 'Admin::dashboard');
// logout routes
$routes->get('admin/logout', 'Admin::logout');
// Reservations routes
$routes->get('reservations', 'Admin::reservations');
// Room routes
$routes->get('room', 'Admin::room');
// guest routes
$routes->get('guest', 'Admin::guest');
// staff routes
$routes->get('staff', 'Admin::staff');
// Calender routes
$routes->get('calendar', 'Admin::calendar');
// Report routes
$routes->get('reports', 'Admin::report');
// settings routes
$routes->get('settings', 'Admin::settings');




/*-------receptionist controller section------------------------------------ */
// $routes->get('login', 'Login::index');
// $routes->post('login/loginAuth', 'Login::loginAuth');
// $routes->get('login/dashboard', 'Login::dashboard');
// $routes->get('login/logout', 'Login::logout');

/*----user controller section ------ */
// $routes->get('user', 'User::index');
// $routes->get('user/register', 'User::register');
// $routes->post('user/register', 'User::register');
// $routes->get('user/dashboard', 'User::dashboard');
// $routes->get('user/reservation', 'User::reservation');
// $routes->get('user/invoice', 'User::invoice');
// $routes->post('user/do_login', 'User::do_login');  
// $routes->post('user/store', 'User::store');      
// $routes->post('user/logout', 'User::logout');   
// $routes->post('user/reset_password', 'User::reset_password');

/* room controller section*/
// $routes->get('room', 'Room::index');
// $routes->get('room/create', 'RoomController::create');
// $routes->post('store', 'RoomController::store');
// $routes->get('edit/(:num)', 'RoomController::edit/$1');
// $routes->post('update/(:num)', 'RoomController::update/$1');
// $routes->post('delete/(:num)', 'RoomController::delete/$1');
// $routes->get('reservations', 'Reservations::reservations');

// Guest controller routes
// $routes->get('guest', 'Guest::index');

// Staff controller routes
// $routes->get('staff', 'Staff::index');
// $routes->get('staff/add_details', 'Staff::add_details');
// $routes->post('/staff/update/(:num)', 'Staff::update/$1');
// $routes->get('/staff/edit/(:num)', 'Staff::edit/$1');
// $routes->get('/staff/delete/(:num)', 'Staff::delete/$1');

// Reports controller routes
// $routes->get('reports', 'Reports::index');

