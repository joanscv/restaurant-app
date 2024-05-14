<?php 

namespace Controllers;
use MVC\Router;

class ParkingController {
    public static function index(Router $router){
        is_auth();
        $router->render('dashboard/parking/index', [
            'titulo'=> 'Parqueadero'
        ]);
    }
}