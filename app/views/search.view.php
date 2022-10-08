<?php

require_once './libs/smarty/libs/Smarty.class.php';

class searchView{
    private $smarty;
    private $admin; //deprecated
    private $warning;
    private $msg;

    function __construct(){
        $this->smarty = new Smarty();
        $this->admin = false;
        $this->warning = false;
        $this->msg = null;
        $this->assignCurrentValues();

    }

    function showSearchPage(){
        $this->smarty->display('search.tpl');
        $this->smarty->display('footer.tpl');
    }

    function showProducts($products){
        // dos posibilidades, viene un objeto vacio o viene un objeto con elementos
        // 1. Caso -> objeto vacio, por ende, el query no dio resultados
        // 2. Caso -> objeto con elementos, por ende, el query dio resultados
        if(count($products) <= 0){ //1. caso
            $this->displayError('No se encontraron productos para la categoría buscada');
        }else{ //2. caso
            $this->smarty->assign('products', $products);
            $this->smarty->assign('admin', false);
            $this->smarty->display('products.tpl');
            //$this->smarty->display('searchInfo.tpl');
        }
        
        $this->showSearchPage();
    }

    
    function showProductInfo($product){

        if($product == false){
            $this->displayError('No existe el producto del que mostrar información');
        }else{
            $this->smarty->assign('product', $product);
            $this->smarty->assign('admin', false);
            $this->smarty->display('productInfo.tpl');
        }

        $this->showSearchPage();
    }

    private function assignCurrentValues(){
        $this->smarty->assign('admin', $this->admin);
        $this->smarty->assign('warning', $this->warning);
        $this->smarty->assign('msg', $this->msg);
    }

    private function setWarning(){
        $this->warning = !$this->warning;
    }

    private function setMsg($msg){
        $this->msg = $msg;
    }

    private function displayError($msg){
            $this->setMsg($msg);
            $this->smarty->assign('msg', $msg);
            $this->smarty->display('errorTemplate.tpl');
    }
}
