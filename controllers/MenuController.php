<?php 
namespace Controllers;

use Model\Mesas;
use MVC\Router;

class MenuController {
    public static function index(Router $router) {

        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id){
            header('Location: /dashboard/restaurante');
        }

        $mesa = new Mesas();
        $mesa = $mesa->find($id);

        if(!$mesa) {
            header('Location: /dashboard/restaurante');
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

        }

        $router->render('dashboard/restaurante/menu/index', [
            'titulo' => 'Menú',
            'mesa' => $mesa
        ]);
    }
}

