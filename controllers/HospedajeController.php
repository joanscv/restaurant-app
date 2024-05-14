<?php 

namespace Controllers;
use MVC\Router;

class HospedajeController {
    public static function index(Router $router){
        is_auth();
        $router->render('dashboard/hospedaje/index', [
            'titulo'=> 'Hospedaje'
        ]);
    }
}