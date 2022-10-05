<?php

require_once './app/controllers/user.controller.php';
require_once './app/controllers/admin.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// instancia el único controller que existe por ahora
$userController = new userController();

// parsea la accion Ej: sumar/1/2 --> ['sumar', 5, 4]
    $params = explode('/', $action);
    
    //tabla de ruteo
    switch($params[0]){
        case 'home':
            $userController->showHome();
            break;
        case 'categories':
            $userController->showCategories();
            break;
        default:
            header("HTTP/1.0 404 Not Found");
            echo('404 Page not found');
            break;
    }