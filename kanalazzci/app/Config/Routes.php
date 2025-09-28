<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/etlap', 'Home::etlap', ['as' =>'etlap']);
$routes->get('/rolunk', 'Home::rolunk', ['as' => 'rolunk']);
$routes->get('/home', 'Home::index', ['as' => 'index']);
$routes->get('/asztalfoglalas', 'Home::asztalfoglalas', ['as' => 'asztalfoglalas']);
$routes->get('/uzenetelkuldve', 'Home::uzenetkoszonet', ['as' => 'asztalfoglalasuzenetkoszonet']);
$routes->post('/asztalfoglalasuzenet', 'Home::saveMessage', ['as' => 'asztalfoglalasuzenet']);

$routes->get('admin/login', 'AdminAuth::login');
       $routes->post('admin/login', 'AdminAuth::doLogin');
       $routes->get('admin/logout', 'AdminAuth::logout');

       $routes->group('admin', ['filter' => 'adminauth'], static function($routes) {
           $routes->get('/', 'Admin::index');
           $routes->get('etlap', 'Admin::etlap');
           $routes->get('etlap/new', 'Admin::newEtel');
           $routes->get('etlap/edit/(:num)', 'Admin::editEtel/$1');
           $routes->post('etlap/save', 'Admin::saveEtel');
           $routes->get('etlap/delete/(:num)', 'Admin::deleteEtel/$1');
       });
