<?php 

namespace Controllers;
use MVC\Router;

class RestauranteController {

    public static function index(Router $router){
        is_auth();
        $admin = $_SESSION['admin'];
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];

        $router->render('dashboard/restaurante/index', [
            'titulo' => 'Restaurante',
            'admin' => $admin,
            'nombre' => $nombre,
            'apellido' => $apellido
        ]);

    }
}