<?php

class productsModel{
    private $db;

    function __construct(){
        $this->connect();
    }
    
    function connect(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_cinemastore;charset=utf8', 'root', '');
    }

    function getAll(){
        $query = $this->db->prepare('SELECT * FROM products');
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    function getProductsByCategory($fr_id){
        $query = $this->db->prepare('SELECT * FROM products where id_categories_fk = ?');
        $query->execute([$fr_id]);

        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    function getProductById($id){
        $query = $this->db->prepare('SELECT * FROM products where id = ?');
        $query->execute([$id]);

        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    //            $this->productsModel->addProduct($model, $price, $country, $brand, $characteristics, $categoryFK);
    function addProduct($model, $price, $country, $brand, $characteristics, $fk){
        $query = $this->db->prepare('INSERT INTO products (model, price, country, brand, techChar, id_categories_fk) VALUES (?, ?, ?, ?, ?, ?)');
        $query->execute([$model, $price, $country, $brand, $characteristics, $fk]);
    }

    function editProduct($model, $price, $country, $brand, $characteristics, $fk, $id){
        $query = $this->db->prepare('UPDATE products SET model = ?, price = ?, country = ?, brand = ?, techChar = ?, id_categories_fk = ? WHERE id = ?');
        $query->execute([$model, $price, $country, $brand, $characteristics, $fk, $id]);
    }

    function deleteProduct($id){
        $query = $this->db->prepare('DELETE FROM products WHERE id = ?');
        $query->execute([$id]);
    }

}