<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\News; // Add this line
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// this is code snippet for new conf files


$routes->get('yummy', 'Yummy\YummyController::index');
$routes->get('contactus', 'Yummy\ContactController::contactus');
$routes->get('booktable', 'Yummy\BookingController::booktable');
$routes->match(['get', 'post'], 'contactus', 'Yummy\ContactController::mailing');
$routes->match(['get', 'post'], 'booktable', 'Yummy\BookingController::booking');
$routes->get('booktable/reservation_verification/(:num)', 'Yummy\BookingController::verifyreservation/$id');

// $routes->get('booktable/reservation_verification/$id', 'Yummy\BookingController::verifyreservation');
// $routes->get('booktable/reservation_verification/(:any)', 'Yummy\BookingController::verifyreservation/$id');

$routes->get('contact', 'EmailController::contact');
$routes->match(['get', 'post'], 'contact', 'EmailController::sendMail');

$routes->get('frmcontr', 'Home::contr');
$routes->get('mailsend', 'EmailController::index');

// $routes->setAutoRoute(false);
// $routes->get('/', 'HomeController::index');
// $routes->get('/{locale}', 'HomeController::index');

// $routes->addPlaceholder('slug', '[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*');
// $routes->get('{locale}/(:slug)', 'HomeController::article/$1');

$routes->get('customhelper','CustomHelper::index');
// $routes->get('book','Book::index');


$routes->get('book','BookController::index');


// $routes->get('news', [News::class,'index']);
// $routes->get('(:segment)', [News::class,'view']);

// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);



