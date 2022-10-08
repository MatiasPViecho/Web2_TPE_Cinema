<?php

require_once './app/views/login.view.php';

//TBD
// require users db from /models
class loginController{
 
    private $loginView;
    function __construct(){
        //$this new userDBModel;
        $this->loginView = new loginView();
    }


    function showLogin(){
        // missing login input and output
        $this->loginView->showLogin();

        // if succesfull login -> activate admin
        // else, error msg -> no user
    }


}
