<?php
require_once './smarty/libs/Smarty.class.php';
require_once './helpers/auth.helper.php';

class homeView{
    private $smarty;

    function __construct(){
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUsername();
        $this->smarty = new Smarty();
        $this->smarty->assign('userName', $username);
        $this->smarty->display('header.tpl');
    }

    /*
    * Show home muestra productos y categorías dentro del home
    */ 
    function showHome($dbProducts, $dbCategories){
        $this->smarty->assign('products', $dbProducts);
        $this->smarty->assign('categories', $dbCategories);
        
        $this->smarty->display('products.tpl');
        $this->smarty->display('categories.tpl');
        $this->smarty->display('footer.tpl');
    }

}
