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

    function showBaseSearchPage($msg = null){
        $dbCategories = $this->categoriesModel->getAll();
        $this->searchView->showSearchPage($dbCategories, $msg);
    }

    function showProductsByCategory($categoryId){
        $dbProducts = $this->productsModel->getProductsByCategory($categoryId);
        $dbCategories = $this->categoriesModel->getAll();
        $dbProducts = $this->addCategoryNameDB($dbProducts, $dbCategories);
        $this->searchView->showProducts($dbProducts);
        $this->showBaseSearchPage();
    }

    function showProductInfo($productId){
        $product = $this->productsModel->getProductById($productId);
        $dbCategories = $this->categoriesModel->getAll();
        
        if($product == false){
            $this->showBaseSearchPage('No existe el producto del que mostrar información');
        }else{
            $product = $this->addCategoryNameProduct($product, $dbCategories);
            $this->searchView->showProductInfo($product);
            $this->showBaseSearchPage();

        }

        
    }
    
    function searchQuery(){
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $minPrice = $_POST['minPrice'];
        $maxPrice = $_POST['maxPrice'];
        $country = $_POST['country'];
        if(empty($_POST['category']))
            $categoryFK = null;
        else
            $categoryFK = $_POST['category'];


        if(empty($minPrice))
            $minPrice = 0;
        if($maxPrice < $minPrice){
            $maxPrice = $this->productsModel->getMaxPrice();
        }

        $dbProducts = $this->productsModel->getProductsQuery($name, $brand, $minPrice, $maxPrice, $country, $categoryFK);
        $dbCategories = $this->categoriesModel->getAll();
        if($dbProducts != false){
            $dbProducts = $this->addCategoryNameDB($dbProducts, $dbCategories);
        }

        if(count($dbProducts) <= 0){
            $this->showBaseSearchPage('No se encontraron productos para la categoría buscada');
        }else{
            $this->searchView->showProducts($dbProducts);
            $this->showBaseSearchPage();
        }

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