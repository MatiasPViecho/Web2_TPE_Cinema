<?php

require_once './libs/smarty/libs/Smarty.class.php';

class editPanelView{
    private $smarty;
    private $admin;
    private $warning;
    private $msg;

    function __construct(){
        $this->smarty = new Smarty();
        $this->admin = false;
        $this->warning = false;
        $this->msg = null;
        $this->assignCurrentValues();
    }
    
    function showEditPanel($dbProducts, $dbCategories){
        $this->smarty->assign('products', $dbProducts);
        $this->smarty->assign('categories', $dbCategories);
        $this->setAdmin();
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