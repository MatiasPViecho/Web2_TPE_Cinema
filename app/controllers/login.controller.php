<?php

require_once './app/models/user.model.php';
require_once './app/views/login.view.php';
require_once './helpers/auth.helper.php';

// require users db from /models
class loginController{
 
    private $loginView;
    private $usersModel;
    private $authHelper;
    
    function __construct(){
        $this->usersModel = new usersModel();
        $this->loginView = new loginView();
        $this->authHelper = new AuthHelper();
    }

    function showLogin(){
        // missing login input and output
        $this->loginView->showLogin();

        // if succesfull login -> activate admin
        // else, error msg -> no user
    }

    public function verifyUser(){
        /*
        1° -> No hay campos USER o PASSWORD, envia error, faltan campos
        2° -> Ambos campos estan rellenados:
                2°A -> Correcto, inicia sesión
                2°B -> Incorrecto, envia error, campos incorrectos
        */

        // if(empty($_POST['username']) || empty($_POST['password'])){
            // $this->loginView->showLogin('Faltan completar campos!');
        // }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $user = $this->usersModel->getByUsername($username);
    
            //encontró user con el username enviado y tiene la misma contraseña
            if(!empty($user) && password_verify($password, $user->password)){
                $this->authHelper->login($user);
                // hacer laburo de header y redireccionar
                header('Location: ' . BASE_URL);
            }else{
                $this->loginView->showLogin('Los campos completados son incorrectos');
            }
        // }

    }
    public function logout(){
        $this->authHelper->logout();
        header('Location: ' . BASE_URL . 'login');
    }
}
