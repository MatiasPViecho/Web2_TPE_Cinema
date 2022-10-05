<?php
require_once './app/models/products.model.php';
require_once './app/models/categories.model.php';
require_once './app/views/user.view.php';
require_once './app/views/admin.view.php';


class adminController{
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

}