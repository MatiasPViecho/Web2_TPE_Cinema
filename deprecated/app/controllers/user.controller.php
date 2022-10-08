<?php
require_once './app/models/products.model.php';
require_once './app/models/categories.model.php';
require_once './app/views/user.view.php';
require_once './app/views/admin.view.php';


class userController{
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

    // DONE
    function showHome(){
        $dbProducts = $this->productsModel->getAll();
        $dbCategories = $this->categoriesModel->getAll();
        
        //Asigno a cada item de productos una nueva variable "category" que muestre
        // el nombre a la categoría que pertenecen
        for ($i=0; $i < count($dbProducts); $i++) { 
            foreach ($dbCategories as $catItem) {
                if($dbProducts[$i]->id_categories_fk == $catItem->id){
                    $dbProducts[$i]->category = $catItem->category;
                }
            }
        }

        $this->userView->showProducts($dbProducts);
    }

    // changed to home
    function showCategories(){
        $dbCategories = $this->categoriesModel->getAll();
        $this->userView->showCategories($dbCategories);
    }

    // TBD in searchController DONE // missing view part
    function showProductsCategory($categoryId){
        $dbProducts = $this->productsModel->getProductsByCategory($categoryId);
        $categoryName = $this->categoriesModel->getName($categoryId);
        $dbCategories = $this->categoriesModel->getAll();
        //Asigno a cada item de productos una nueva variable "category" que muestre
        // el nombre a la categoría que pertenecen
        for ($i=0; $i < count($dbProducts); $i++) { 
            foreach ($dbCategories as $catItem) {
                if($dbProducts[$i]->id_categories_fk == $catItem->id){
                    $dbProducts[$i]->category = $catItem->category;
                }
            }
        }
        $this->userView->showProducts($dbProducts, $categoryName);
    }

    //TBD in searchController
    function showProductInfo($productId){
        $product = $this->productsModel->getProductById($productId);
        $categoryId = $product->id_categories_fk;
        $categoryName = $this->categoriesModel->getName($categoryId);

        $this->userView->showProductInfo($product, $categoryName);    
    }

    // Not a function
    function tbdPage(){
        $this->userView->showTBD();
    }
}