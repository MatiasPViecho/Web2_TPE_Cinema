<?php

require_once './app/models/products.model.php';
require_once './app/models/categories.model.php';
require_once './app/views/search.view.php';

class searchController{
    private $productsModel;
    private $categoriesModel;
    private $searchView;

    function __construct(){
        $this->productsModel = new productsModel();
        $this->categoriesModel = new categoriesModel();
        $this->searchView = new searchView();
    }

    function showBaseSearchPage(){
        $this->searchView->showSearchPage();
    }

    function showProductsByCategory($categoryId){
        $dbProducts = $this->productsModel->getProductsByCategory($categoryId);
        $dbCategories = $this->categoriesModel->getAll();
        $dbProducts = $this->addCategoryNameDB($dbProducts, $dbCategories);

        $this->searchView->showProducts($dbProducts);
    }

    function showProductInfo($productId){
        $product = $this->productsModel->getProductById($productId);
        $dbCategories = $this->categoriesModel->getAll();
        if($product != false)
            $product = $this->addCategoryNameProduct($product, $dbCategories);
        $this->searchView->showProductInfo($product);
    }
    
    function searchQuery(){
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $minPrice = $_POST['minPrice'];
        $maxPrice = $_POST['maxPrice'];
        $country = $_POST['country'];
        if(empty($minPrice))
            $minPrice = 0;
        if($maxPrice < $minPrice){
            $maxPrice = $this->productsModel->getMaxPrice();
        }

        $dbProducts = $this->productsModel->getProductsQuery($name, $brand, $minPrice, $maxPrice, $country);
        $dbCategories = $this->categoriesModel->getAll();
        if($dbProducts != false){
            $dbProducts = $this->addCategoryNameDB($dbProducts, $dbCategories);
        }
        
        $this->searchView->showProducts($dbProducts);

    }


    private function addCategoryNameProduct($product, $dbCategories){
        foreach ($dbCategories as $category) {
            if($category->id == $product->id_categories_fk)
                $product->category = $category->category;
        }

        return $product;
    }
    private function addCategoryNameDB($dbProducts, $dbCategories){
        //Asigno a cada item de productos una nueva variable "category" que muestre
        // el nombre a la categoría que pertenecen
        for ($i=0; $i < count($dbProducts); $i++) { 
            foreach ($dbCategories as $catItem) {
                if($dbProducts[$i]->id_categories_fk == $catItem->id){
                    $dbProducts[$i]->category = $catItem->category;
                }
            }
        }
        return $dbProducts;
    }
}