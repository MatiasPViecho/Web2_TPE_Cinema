<?php

require_once './app/controllers/user.controller.php';
require_once './app/controllers/admin.controller.php';
require_once './app/controllers/home.controller.php';
require_once './app/controllers/editPanel.controller.php';
require_once './app/controllers/login.controller.php';
require_once './app/controllers/search.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// instancia el único controller que existe por ahora
$adminController = new adminController();
$homeController = new homeController();
$editPanelController = new editPanel();
$loginController = new loginController();
$searchController = new searchController();


// parsea la accion Ej: sumar/1/2 --> ['sumar', 5, 4]
    $params = explode('/', $action);
    
    //tabla de ruteo
    switch($params[0]){
        case 'home': //done
            $homeController->showHome();
            break;

        case 'search':
            if(isset($params[1]) && ($params[1] == 'product' || $params[1] == 'category' || $params[1] == 'query')){
                switch($params[1]){
                    case 'product':
                        $id = $params[2];
                        $searchController->showProductInfo($id);
                        break;
                    case 'category':
                        $id = $params[2];
                        $searchController->showProductsByCategory($id);
                        break;
                    case 'query':
                        $searchController->searchQuery();
                        break;
                    default:
                        $searchController->showBaseSearchPage();
                        break;
                }
            }else{
                $searchController->showBaseSearchPage();
            }
            break;
        case 'login':
            $loginController->showLogin();
            break;
        case 'edit':
            $editPanelController->showEditPanel();
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