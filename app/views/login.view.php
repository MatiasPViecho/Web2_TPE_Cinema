<?php

require_once './libs/smarty/libs/Smarty.class.php';

class loginView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }   

    function showLogin($msg = null){
        $this->smarty->assign('error', $msg);
        
        $this->smarty->display('login.tpl');
        $this->smarty->display('footer.tpl');    
    }
}
