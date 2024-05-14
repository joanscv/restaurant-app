<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\BarController;
use Controllers\HospedajeController;
use Controllers\InicioController;
use Controllers\ParkingController;
use Controllers\RestauranteController;

$router = new Router();


// Login
$router->get('/', [AuthController::class, 'login']);
$router->post('/', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/crear', [AuthController::class, 'crear']);
$router->post('/crear', [AuthController::class, 'crear']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);


// Inicio
$router->get('/dashboard/inicio', [InicioController::class, 'index']);

// Restaurante
$router->get('/dashboard/restaurante', [RestauranteController::class, 'index']);

// Bar
$router->get('/dashboard/bar', [BarController::class, 'index']);

// Hospedaje
$router->get('/dashboard/hospedaje', [HospedajeController::class, 'index']);

// Parking
$router->get('/dashboard/parking', [ParkingController::class, 'index']);

$router->comprobarRutas();