<?php
require_once './libs/smarty/libs/Smarty.class.php';

class adminView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function showAdminPanel($dbCategories, $warning, $msg, $dbProducts){
        $this->smarty->assign('admin', true);
        $this->smarty->assign('warning', $warning);
        $this->smarty->assign('warningMsg', $msg);
        $this->smarty->assign('categories', $dbCategories);
        $this->smarty->assign('products', $dbProducts);

        $this->smarty->display('header.tpl');
        $this->smarty->display('adminPanel.tpl');
        $this->smarty->display('footer.tpl');
    }

    function editProductPage($product, $dbCategories){
        $this->smarty->assign('admin', true);
        $this->smarty->assign('product', $product);
        $this->smarty->assign('categories', $dbCategories);


        $this->smarty->display('header.tpl');
        $this->smarty->display('editProduct.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showCategoryPage($category, $products, $dbCategories){
        $this->smarty->assign('admin', true);
        $this->smarty->assign('products', $products);
        $this->smarty->assign('category', $category);
        $this->smarty->assign('categories', $dbCategories);
        
        $this->smarty->display('header.tpl');
        $this->smarty->display('editCategory.tpl');
        $this->smarty->display('footer.tpl');
    }
}