<?php

// clase padre, ya que todas utilizan las mismas funcionalidades, las agrupo
// dentro de una clase padre, para que al heredarlas las contegan
require_once './libs/smarty/libs/Smarty.class.php';

class parentView{
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
        $this->smarty->display('header.tpl');
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