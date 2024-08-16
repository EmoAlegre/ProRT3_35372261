<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');             // Página principal
$routes->get('principal', 'Home::index'); // Redirige a Home::index
$routes->get('quienes_somos', 'Home::quienes_somos'); // Quienes somos
/*$routes->get('registro', 'Home::registro');     // Registro */
$routes->get('login', 'Home::login');           // Login


 /* rutas del Registro de Usuarios */ 
$routes->get('registro', 'usuario_controller::create');
$routes->post('formValidation', 'usuario_controller::formValidation');
 

 /* rutas del login  */ 
 $routes->get('/login', 'login_controller'); 
 $routes->post('/enviarlogin','login_controller::auth'); 
 $routes->get('/panel', 'Panel_controller::index',['filter' => 'auth']); 
 $routes->get('/logout', 'login_controller::logout');


