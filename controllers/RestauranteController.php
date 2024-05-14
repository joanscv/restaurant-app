<?php 

namespace Controllers;

use Model\Mesas;
use MVC\Router;

class RestauranteController {

    public static function index(Router $router){
        is_auth();
        $admin = $_SESSION['admin'];
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];

        $mesas = Mesas::all();

        $router->render('dashboard/restaurante/index', [
            'titulo' => 'Restaurante',
            'admin' => $admin,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'mesas' => $mesas
        ]);

    }
}