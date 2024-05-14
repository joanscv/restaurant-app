<?php 

namespace Controllers;
use MVC\Router;

class BarController {
    public static function index(Router $router){
        is_auth();
        $router->render('dashboard/bar/index', [
            'titulo'=> 'Bar'
        ]);
    }
}