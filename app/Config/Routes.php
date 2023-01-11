<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

    $routes->get('/', 'Home::index');
    $routes->get('/privacy', 'Home::privacy');
    $routes->get('/about', 'Home::about');
//$routes->get('auth', 'AuthController::index');


$routes->group('', ['filter' => 'AuthCheckLogged'], function ($routes){

    $routes->match(['get', 'post'], 'auth/register', 'AuthController::register');
    $routes->match(['get', 'post'], 'auth/login', 'AuthController::index');
    $routes->match(['get', 'post'], 'auth/recovery-password/(:any)', 'AuthController::recoveryKey');
    $routes->match(['get', 'post'], 'auth/recovery-password', 'AuthController::recovery');
});


$routes->group('', ['filter' => 'AuthCheck'], function ($routes){
    $routes->get('auth/logout', 'AuthController::logout');
    $routes->get('dashboard', 'DashboardController::index');

    $routes->match(['get', 'post'], 'dashboard/change-password', 'DashboardController::changePassword');
    $routes->match(['get', 'post'], 'dashboard/profile', 'DashboardController::changePhoto');
    $routes->match(['get', 'post'], 'dashboard/change-data', 'DashboardController::changeData');

    $routes->match(['get', 'post'], 'user/appointment', 'AppointmentController::insertbooking');
});

    $routes->match(['get', 'post'], 'admin/login', 'DocAuthController::index');

$routes->group('', ['filter' => 'AuthDoctor'], function ($routes){
    $routes->get('admin/logout', 'DocAuthController::logout');

    $routes->match(['get', 'post'], 'admin/change-settings', 'DashboardController::changeSettings');
    $routes->match(['get', 'post'], 'admin/appointment',  'DoctorDashboard::appointment');
    $routes->match(['get', 'post'], 'admin/patient', 'DoctorDashboard::patient');
    
    $routes->get('admin/dashboard', 'Home::ddashboard');    
});

$routes->get('killer', 'DashboardController::reschedule');


$routes->get('try', 'Home::fetch');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
