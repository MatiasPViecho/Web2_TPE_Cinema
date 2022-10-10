<?php
require_once './app/models/products.model.php';
require_once './app/models/categories.model.php';
require_once './app/views/user.view.php';
require_once './app/views/admin.view.php';


class adminController{
    private $productsModel;
    private $userView;
    private $categoriesModel;
    private $adminView;

    function __construct(){
        $this->productsModel = new productsModel();
        $this->userView = new userView();
        $this->categoriesModel = new categoriesModel();
        $this->adminView = new adminView();
    }

    function showAdminPage($warning = false, $msg){
        $dbCategories = $this->categoriesModel->getAll();
        $dbProducts = $this->productsModel->getAll();
        $this->adminView->showAdminPanel($dbCategories, $warning, $msg, $dbProducts);
    }

    function addProduct(){
       // var_dump($_POST);
        
        $model = $_POST['model'];
        $price = $_POST['price'];
        $country = $_POST['country'];
        $brand = $_POST['brand'];
        $characteristics = $_POST['characteristics'];
        $categoryFK = $_POST['category'];

        if($this->checkProductFields()){
            if(is_null($_POST['category']) == null){
                $this->showAdminPage(true, 'Falta agregar categoría');
            }
            $this->productsModel->addProduct($model, $price, $country, $brand, $characteristics, $categoryFK);
            header('Location: ' . BASE_URL);
        }else{
            $this->showAdminPage(true, 'Hay campos sin completar');
        }
    }

    function addCategory(){
        $category = $_POST['category'];
        if(!empty($_POST['category'])){
            $this->categoriesModel->addCategory($category);
            header('Location: ' . BASE_URL . 'categories');
        }
        else
            $this->showAdminPage(true, 'No se colocó nada en el campo categoría!');
        

    }


    private function checkProductFields(){
        if(!empty($_POST['model']) && !empty($_POST['price'])
            && !empty($_POST['country']) && !empty($_POST['brand'])
            && !empty($_POST['characteristics']) && !empty($_POST['category'])){
                return true;
            }else{
                return false;
            }
    }

    function editProductPage($id){
        $product = $this->productsModel->getProductById($id);
        $dbCategories = $this->categoriesModel->getAll();
            $this->adminView->editProductPage($product, $dbCategories);
        }

    function editProduct($id){
        $model = $_POST['model'];
        $price = $_POST['price'];
        $country = $_POST['country'];
        $brand = $_POST['brand'];
        $characteristics = $_POST['characteristics'];
        $categoryFK = $_POST['category'];

        if(!empty($_POST['model']) && !empty($_POST['price'])
            && !empty($_POST['country']) && !empty($_POST['brand'])
            && !empty($_POST['characteristics']) && !empty($_POST['category'])){
                $this->productsModel->editProduct($model, $price, $country, $brand, $characteristics, $categoryFK, $id);
                header('Location: ' . BASE_URL . 'edit');
            }else{
                header('Location: ' . BASE_URL . 'edit');
                $this->showAdminPage(true, 'No se pude completar la operación en el producto editado, faltaron rellenar campos');
            }
    }

    function deleteProduct($id){
        $this->productsModel->deleteProduct($id);
    }

    function editCategoryPage($id){
        $category = $this->categoriesModel->getCategory($id);
        $products = $this->productsModel->getProductsByCategory($id);
        $dbCategories = $this->categoriesModel->getAll();
        $this->adminView->showCategoryPage($category, $products, $dbCategories);
    }

    function editCategory($id){
        if(!empty($_POST['category'])){
            $category = $_POST['category'];
            $this->categoriesModel->editCategory($id, $category);
        }
    }

    function deleteCategory($id){
        $products = $this->productsModel->getProductsByCategory($id);
        if(!empty($products)){
            $this->showAdminPage(true, 'Hay productos en la categoría a borrar! Borrelos antes de borrar la categoría');
        }else{
            $this->categoriesModel->deleteCategory($id);
            header('Location: ' . BASE_URL . 'edit');
        }
    }
}