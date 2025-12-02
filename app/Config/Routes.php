<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');

$routes->get('/login', 'Auth::index');
$routes->post('/login/auth', 'Auth::loginAuth');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/Register', 'Auth::registerAuth');
$routes->get('/logout', 'Auth::logout');
$routes->get('/admin/index', 'Auth::admin');


$routes->get('/admin/produk/', 'Admin\Produk::index');
$routes->get('/admin/produk/create', 'Admin\Produk::create');
$routes->post('store', 'Admin\Produk::store'); 
$routes->get('edit/(:num)', 'Admin\Produk::edit/$1'); 
$routes->post('update/(:num)', 'Admin\Produk::update/$1');
$routes->get('delete/(:num)', 'Admin\Produk::delete/$1');
$routes->get('detail/(:num)', 'Admin\Produk::detail/$1');
