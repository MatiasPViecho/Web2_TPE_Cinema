<?php
require_once './libs/smarty/libs/Smarty.class.php';
require_once './helpers/auth.helper.php';

class homeView{
    private $smarty;
    private $admin;
    private $warning;
    private $msg;

    function __construct(){
        $this->admin = false;
        $this->warning = false;
        $this->msg = null;
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUsername();

        $this->smarty = new Smarty();
        $this->smarty->assign('userName', $username);
        $this->assignCurrentValues();
        $this->smarty->display('header.tpl');
    }

    /*
    * Show home muestra productos y categorías dentro del home
    */ 
    function showHome($dbProducts, $dbCategories){
        $this->smarty->assign('products', $dbProducts);
        $this->smarty->assign('categories', $dbCategories);

        $this->assignCurrentValues();
        $this->smarty->display('products.tpl');
        $this->smarty->display('categories.tpl');
        $this->smarty->display('footer.tpl');
    }


    private function assignCurrentValues(){
        $this->smarty->assign('admin', $this->admin);
        $this->smarty->assign('warning', $this->warning);
        $this->smarty->assign('msg', $this->msg);
    }

    private function setAdmin($value = null){
        if((!is_null($value)) && ($value == true || $value == false)){
            $this->admin = $value;
            echo "hola mundo true";
        }
        else{
            $this->admin = !$this->admin;
            echo "hola mundo else";
        }
    }

    private function setWarning(){
        $this->warning = !$this->warning;
    }

    private function setMsg($msg){
        $this->msg = $msg;
    }
}
