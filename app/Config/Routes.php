<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index'); // this is default controller


/*----admin controller section ------ */
// view routes
$routes->get('/', 'Admin::index'); //project's default controller
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
// guest routes
$routes->get('guest', 'Admin::guest');
// Calender routes
$routes->get('calendar', 'Admin::calendar');
// Report routes
$routes->get('reports', 'Admin::report');
// settings routes
$routes->get('settings', 'Admin::settings');
// test routes
$routes->get('test', 'Admin::test');

// admin registration controller routes  
$routes->group('auth', function ($routes) {
    $routes->get('Admin/register', 'Auth::register'); // Show registration form
    $routes->post('Admin/create', 'Auth::create'); // Process registration
});
// rooms controller routes
$routes->get('/room', 'Room::index');
$routes->post('room/addRoom', 'room::addRoom');
$routes->post('room/deleteRoom/(:num)', 'Room::deleteRoom/$1'); // To delete room

// staff controller routes  
$routes->get('staff', 'Staff::index');
$routes->post('staff/add_form_details', 'Staff::add_form_details');
$routes->get('staff/get_staff_details/(:num)', 'Staff::get_staff_details/$1'); //get staff details
$routes->post('staff/update_staff/(:num)', 'Staff::update_staff/$1'); // Update staff
$routes->delete('staff/delete_staff/(:num)', 'Staff::delete_staff/$1'); // Delete staff
/*-------------------------------user[receptionist] controller section-------------------------------------------- */
$routes->get('/auth', 'Auth::index');                           // user view
$routes->post('auth/store', 'Auth::store');                     // store user details 
$routes->get('auth/login', 'Auth::login');                      // user login view
$routes->post('auth/authlogin', 'Auth::authlogin');             // user login
$routes->get('auth/logout', 'Auth::logout');                    // user logout
$routes->get('auth/dashboard', 'Auth::dashboard');              // user dashboard
$routes->get('auth/forgotPassword', 'Auth::forgotPassword');    // user forgot password
// link all dashboard pages of recepionist side using one controller
$routes->get('availability', 'Auth::availability'); //availability
$routes->post('room/getAvailableRooms', 'Room::getAvailableRooms');
$routes->get('reservation', 'Auth::reservation');      //reservation
$routes->get('booking', 'Auth::booking');      //booking
$routes->get('invoice', 'Auth::invoice');      //invoice generate
$routes->get('complaints', 'Auth::complaints');      //complaints
// booking rooms for user controller routes
$routes->post('booking/getAvailableRooms', 'Booking::getAvailableRooms');
$routes->post('booking/createBooking', 'Booking::createBooking');









