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
$adminController = new adminController();

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
        case 'showProducts':
            $id = $params[1];
            $userController->showProductsCategory($id);
            break;
        case 'product':
            $id = $params[1];
            $userController->showProductInfo($id);
            break;
        case 'login':
            $userController->tbdPage();
            break;
        case 'edit':
            $adminController->showAdminPage(false, null);
            break;
        case 'addProduct':
            $adminController->addProduct();
            break;
        case 'addCategory':
            $adminController->addCategory();
            break;
        case 'editProduct':
            if(isset($params[1])){
                if($params[1] == 'edit'){
                    $id = $params[2];
                    $adminController->editProduct($id);
                }else{
                    $id = $params[1];
                    $adminController->editProductPage($id);
                }
            }else
                header('Location: ' . BASE_URL);
            break;
        case 'deleteProduct':
            if(isset($params[1])){
                $id = $params[1];
                $adminController->deleteProduct($id);
            }else{
            }
            header('Location: ' . BASE_URL . 'edit');
            break;
        case 'editCategory':
            if(isset($params[1])){
                if($params[1] == 'edit'){
                    $id = $params[2];
                    $adminController->editCategory($id);
                    header('Location: ' . BASE_URL . 'edit');
                }else{
                    $id = $params[1];
                    $adminController->editCategoryPage($id);
                }
            }
            break;
        case 'deleteCategory':
            if(isset($params[1])){
                $id = $params[1];
                $adminController->deleteCategory($id);
            }
            break;
        default:
            header("HTTP/1.0 404 Not Found");
            echo('404 Page not found');
            break;
    }