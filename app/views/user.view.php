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
        $this->smarty->assign('admin', false);
        $this->smarty->display('header.tpl');
        $this->smarty->display('products.tpl');
        $this->smarty->display('footer.tpl');
    }
}