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
// view register page 
$routes->get('admin/register', 'Admin::register');
// login routes
$routes->post('admin/loginAuth', 'Admin::loginAuth');
// dashboard routes
$routes->get('admin/dashboard', 'Admin::dashboard');
// logout routes
$routes->get('admin/logout', 'Admin::logout');
// Reservations routes
$routes->get('reservations', 'Admin::reservations');
// Room routes
// $routes->get('room', 'Admin::room');
// guest routes
$routes->get('guest', 'Admin::guest');
// staff routes
// $routes->get('staff', 'Admin::staff_view');
// Calender routes
$routes->get('calendar', 'Admin::calendar');
// Report routes
$routes->get('reports', 'Admin::report');
// settings routes
$routes->get('settings', 'Admin::settings');
// test routes
$routes->get('test', 'Admin::test');

// Define the routes for registration
$routes->group('auth', function ($routes) {
    $routes->get('Admin/register', 'Auth::register'); // Show registration form
    $routes->post('Admin/create', 'Auth::create'); // Process registration
});

// rooms routes
$routes->get('/room', 'Room::index');
// $routes->post('room/add_form_details', 'Room::add_form_details');
$routes->post('room/insert_data', 'room::insert_data');
$routes->delete('room/delete/(:num)', 'Room::delete/$1'); // To delete room
// $routes->post('add-room', 'RoomController::addRoom');
$routes->get('roomcontroller', 'RoomController::index');

$routes->get('/roomcontroller', 'RoomController::index');
$routes->post('RoomController/saveRoomDetails', 'RoomController::saveRoomDetails');
$routes->get('RoomController/viewRoomDetails', 'RoomController::viewRoomDetails');

// staff controller functions routes  
$routes->get('staff', 'Staff::index');
$routes->post('staff/add_form_details', 'Staff::add_form_details');

$routes->get('staff/edit/(:num)', 'Staff::edit_staff_details/$1'); // To edit staff
$routes->post('staff/updateStaff/(:num)', 'Staff::updateStaff/$1'); // To update staff
$routes->delete('staff/ delete_details', 'Staff:: delete_details'); // To delete staff
/*-------------------------------user[receptionist] controller section-------------------------------------------- */
$routes->get('/auth', 'Auth::index');
$routes->post('auth/store', 'Auth::store');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/authlogin', 'Auth::authlogin');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('auth/dashboard', 'Auth::dashboard');
$routes->get('auth/forgotPassword', 'Auth::forgotPassword');
// link all dashboard pages of recepionist
$routes->get('availability', 'Auth::availability'); //availability
$routes->get('reservation', 'Auth::reservation');      //reservation
$routes->get('booking', 'Auth::booking');      //booking
$routes->get('invoice', 'Auth::invoice');      //invoice generate
$routes->get('complaints', 'Auth::complaints');      //complaints










