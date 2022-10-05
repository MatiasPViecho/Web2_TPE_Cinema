<?php
require_once './app/models/products.model.php';
require_once './app/models/categories.model.php';
require_once './app/views/user.view.php';
require_once './app/views/admin.view.php';


class userController{
    private $userModel;
    private $userView;
    private $adminModel;
    private $adminView;

    function __construct(){
        $this->productsModel = new productsModel();
        $this->userView = new userView();
        $this->categoriesModel = new categoriesModel();
        $this->adminView = new adminView();
    }

    function showHome(){
        $dbProducts = $this->productsModel->getAll();
        $dbCategories = $this->categoriesModel->getAll();
        $this->userView->showHome($dbProducts, $dbCategories);
    }

    function showCategories(){
        $dbCategories = $this->categoriesModel->getAll();
        $this->userView->showCategories($dbCategories);
    }

    function showProductsCategory($categoryId){
        $dbProducts = $this->productsModel->getProductsByCategory($categoryId);
        $categoryName = $this->categoriesModel->getName($categoryId);
        $dbCategories = $this->categoriesModel->getAll();
        $this->userView->showProducts($dbProducts, $categoryName, $dbCategories);
    }

    function showProductInfo($productId){
        $product = $this->productsModel->getProductById($productId);
        $categoryId = $product->id_categories_fk;
        $categoryName = $this->categoriesModel->getName($categoryId);

        $this->userView->showProductInfo($product, $categoryName);    
    }

    function tbdPage(){
        $this->userView->showTBD();
    }
}