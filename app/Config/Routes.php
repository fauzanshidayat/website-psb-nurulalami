<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home\PendaftaranController::index');
$routes->post('/pendaftaran', 'Home\PendaftaranController::store');

$routes->get('/auth/login', 'Auth\LoginController::index');
$routes->post('/auth/login', 'Auth\LoginController::login');
$routes->post('/auth/logout', 'Auth\LoginController::logout');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'Admin\DashboardController::index');
    $routes->get('/dashboard/pendaftar', 'Admin\Pendaftar\PendaftaranController::index');
    $routes->get('/dashboard/pendaftar/detail/(:num)', 'Admin\Pendaftar\PendaftaranController::detail/$1');

    $routes->get('/dashboard/pendaftar/delete/(:num)', 'Admin\Pendaftar\PendaftaranController::delete/$1');

    // dan halaman lain yang butuh login
});
