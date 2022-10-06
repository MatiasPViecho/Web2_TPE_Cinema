<?php
require_once './libs/smarty/libs/Smarty.class.php';
class userView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showHome($dbProducts, $dbCategories){
        $this->smarty->assign('products', $dbProducts);
        $this->smarty->assign('categories', $dbCategories);
        //Change to false!
        $this->smarty->assign('admin', false);
        $this->smarty->display('header.tpl');
        $this->smarty->display('products.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showCategories($db){
        $this->smarty->assign('categories', $db);
        //Change to false!
        $this->smarty->assign('admin', false);
        $this->smarty->display('header.tpl');
        $this->smarty->display('categories.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showProducts($db){
        $this->smarty->assign('products', $db);
        $this->smarty->assign('admin', false);

        $this->smarty->display('header.tpl');
        //$this->smarty->display('productsCategory.tpl');
        $this->smarty->display('products.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showProductInfo($product){
        //$this->smarty->assign('category', $category);
        $this->smarty->assign('product', $product);
        $this->smarty->assign('admin', true);

        $this->smarty->display('header.tpl');
        $this->smarty->display('productInfo.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showTBD(){
        $this->smarty->assign('admin', true);

        $this->smarty->display('header.tpl');
        $this->smarty->display('tbd.tpl');
        $this->smarty->display('footer.tpl');    }
}