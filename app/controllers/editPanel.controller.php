<?php

require_once './app/models/categories.model.php';
require_once './app/models/products.model.php';
require_once './app/views/editPanel.view.php';


class editPanel{
    private $productsModel;
    private $categoriesModel;
    private $editPanelView;

    function __construct(){
        $this->productsModel = new productsModel();
        $this->categoriesModel = new categoriesModel();
        $this->editPanelView = new editPanelView();
    }

    function showEditPanel(){
        $dbProducts = $this->productsModel->getAll();
        $dbCategories = $this->categoriesModel->getAll();
        $dbProducts = $this->addCategoryName($dbProducts, $dbCategories);
        $this->editPanelView->showEditPanel($dbProducts, $dbCategories);
    }

    private function addCategoryName($dbProducts, $dbCategories){
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