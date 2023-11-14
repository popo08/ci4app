<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute('true');
$routes->get('barang/delete/(:num)', 'barang::delete/$1');
$routes->get('/', 'Home::index');
