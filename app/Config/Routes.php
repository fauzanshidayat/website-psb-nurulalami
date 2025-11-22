<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('pendaftaran', 'Pendaftaran::index');
$routes->post('pendaftaran/simpan', 'Pendaftaran::simpan');
