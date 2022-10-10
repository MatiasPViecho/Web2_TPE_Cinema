<?php
require_once './libs/smarty/libs/Smarty.class.php';

class editView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showEditMenu($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('edit.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showProductsPanel($dbProducts, $dbCategories,  $error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('products', $dbProducts);
        $this->smarty->assign('categories', $dbCategories);
        $this->smarty->display('productsEdit.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showCategoryPanel($dbCategories, $error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('categories', $dbCategories);
        $this->smarty->display('categoryEdit.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showModifyProductPanel($product, $dbProducts, $dbCategories, $error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('product', $product);
        $this->smarty->assign('categories', $dbCategories);
        $this->smarty->assign('products', $dbProducts);

        $this->smarty->display('productsEdit.tpl');
        $this->smarty->display('productModify.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showModifyCategoryPanel($category, $dbCategories,  $dbProducts, $error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('products', $dbProducts);
        $this->smarty->assign('category', $category);
        $this->smarty->assign('categories', $dbCategories);

        $this->smarty->display('categoryEdit.tpl');
        $this->smarty->display('categoryModify.tpl');
        $this->smarty->display('footer.tpl');

    }
}