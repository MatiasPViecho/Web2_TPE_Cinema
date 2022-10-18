<?php

require_once './smarty/libs/Smarty.class.php';

class searchView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showSearchPage($dbCategories, $error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('categories', $dbCategories);
        $this->smarty->display('search.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showProducts($products){
            $this->smarty->assign('products', $products);
            $this->smarty->display('products.tpl');
    }

    
    function showProductInfo($product){
            $this->smarty->assign('product', $product);
            $this->smarty->display('productInfo.tpl');

    }

}
