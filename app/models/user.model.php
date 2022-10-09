<?php

class usersModel{
    private $db;

    function __construct(){
        $this->connect();
    }

    function connect(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_cinemastore;charset=utf8', 'root', '');
    }

    function getByUsername($username){
        $query = $this->db->prepare('SELECT * FROM users WHERE username = ?');
        $query->execute([$username]);

        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }


}