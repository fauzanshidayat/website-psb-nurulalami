<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/auth/login', 'Auth\Login::index');
$routes->post('/auth/login', 'Auth\Login::login');
$routes->post('/auth/logout', 'Auth\Login::logout');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'Dashboard::index');
    $routes->get('/profile', 'User::profile');
    // dan halaman lain yang butuh login
});

// $routes->get('/dashboard', 'Dashboard::index');
// $routes->get('/pendaftaran/index', 'Pendaftaran::index');
