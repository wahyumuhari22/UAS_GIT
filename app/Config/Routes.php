<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('beranda', 'Beranda::index');
$routes->get('hewanair', 'HewanAir::index');
$routes->get('hewandarat', 'HewanDarat::index');
$routes->get('hewanudara', 'HewanUdara::index');




$routes->get('Mahasiswa', 'Mahasiswa::index');
$routes->get('Mahasiswa/ambildata', 'Mahasiswa::ambildata');
$routes->get('Mahasiswa/formtambah', 'Mahasiswa::formtambah');

