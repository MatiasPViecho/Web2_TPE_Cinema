<?php

require_once './libs/smarty/libs/Smarty.class.php';

class loginView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }   

    function showLogin(){
        $this->smarty->display('tbd.tpl');
        $this->smarty->display('footer.tpl');    
    }
}
