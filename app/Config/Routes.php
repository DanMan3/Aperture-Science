<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 // Home page
$routes->get('/', 'Home::index');
$routes->get('/science', 'Home::index');


//GLaDOS quotes
$routes->get('/science/glados', 'Glados::post');


//Cave Johnson quotes
$routes->get('/science/cavejohnson', 'Cavejohnson::index');

//Wheatley quotes
$routes->get('/science/wheatley', 'Wheatley::index');


//Add New Quote Form
$routes->get('/science/new', 'Quotes::index');
$routes->post('/science/new', 'Quotes::post');

