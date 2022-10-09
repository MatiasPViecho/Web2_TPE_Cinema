<?php

class AuthHelper{
    public function __construct() {}

    public function login($user){
        // Starts session and logs user
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USERNAME'] = $user->username;
    }

    public function logout(){
        session_start();
        session_destroy();
    }

    public function checkLoggedIn(){
        if(session_status() != PHP_SESSION_ACTIVE)
            session_start();
        if(!isset($_SESSION['ID_USER'])){
            header('Location: ' . BASE_URL . 'login');
        }
    }

    public function getLoggedUsername(){
        if(session_status() != PHP_SESSION_ACTIVE)
            session_start();
        if(isset($_SESSION['USERNAME'])){
            return $_SESSION['USERNAME'];
        }else
            return null;
    }
}