<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Crud::index');
$routes->get('/create', 'Crud::create');
$routes->post('/Crud/add', 'Crud::add');
$routes->get('/Crud/edit/(:num)', 'Crud::edit/$1');
$routes->post('/Crud/update/', 'Crud::update');
$routes->get('/Crud/delete/(:num)', 'Crud::delete/$1');
