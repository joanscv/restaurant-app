<?php

namespace Controllers;
use MVC\Router;

class InicioController {
    public static function index(Router $router) {

        is_auth();
        $router->render('dashboard/inicio/index', [
            'titulo' => 'Inicio'
        ]);

    }
}