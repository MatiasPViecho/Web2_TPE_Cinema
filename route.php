<?php

require_once './app/controllers/home.controller.php';
require_once './app/controllers/login.controller.php';
require_once './app/controllers/search.controller.php';
require_once './app/controllers/edit.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

//Instancio los controllers a utilizar
$homeController = new homeController();
$loginController = new loginController();
$searchController = new searchController();
$editController = new editController();

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
                        if(!isset($params[2]))
                            $searchController->showBaseSearchPage();
                        else{
                            $id = $params[2];
                            $searchController->showProductInfo($id);
                        }

                        break;
                    case 'category':
                        if(!isset($params[2]))
                            $searchController->showBaseSearchPage();
                        else{
                            $id = $params[2];
                            $searchController->showProductsByCategory($id);
                        }
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
            if(isset($params[1]) && ($params[1] == 'verify')){
                $loginController->verifyUser();
            }else{
                $loginController->showLogin();
            }
            break;
        case 'logout':
            $loginController->logout();
            break;

        case 'edit':
                $editController->showEditPanel();
                break;

        case 'product':
            if(isset($params[1]) && (($params[1] == 'add') || ($params[1] == 'modify') || ($params[1] == 'delete'))){
                switch($params[1]){
                    case 'add':
                        $editController->addProduct();
                        break;
                    case 'modify':
                        if(!isset($params[2]))
                            $editController->showModifyProductPanel(null);
                        else{
                            if($params[2] == 'edit'){
                                $editController->modifyProduct($params[3]);
                            }else{
                                $editController->showModifyProductPanel($params[2]);
                            }
                        }
                        break;
                    case 'delete':
                        if(!isset($params[2])){
                            $editController->deleteProduct(null);
                        }else
                            $editController->deleteProduct($params[2]);
                        break;
                }
            }else
                $editController->showProductsPanel();
            break;
        case 'category':
            if(isset($params[1]) && (($params[1] == 'add') || ($params[1] == 'modify') || ($params[1] == 'delete'))){
                switch($params[1]){
                    case 'add':
                        $editController->addCategory();
                        break;
                    case 'modify':
                        if(!isset($params[2]))
                            $editController->showModifyCategoryPanel(null);
                        else{
                            if($params[2] == 'edit'){
                                $editController->modifyCategory($params[3]);
                            }else{
                                $editController->showModifyCategoryPanel($params[2]);
                            }
                        }
                        break;
                    case 'delete':
                        if(!isset($params[2])){
                            $editController->deleteCategory(null);
                        }else
                            $editController->deleteCategory($params[2]);
                        break;
                }
            }
            else
                $editController->showCategoryPanel();
                break;
        default:
            header("HTTP/1.0 404 Not Found");
            echo('404 Page not found');
            break;
    }