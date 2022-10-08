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

    function getProductsQuery($model, $brand, $minPrice, $maxPrice, $country){
        //$query = $this->db->prepare("SELECT * FROM products WHERE model LIKE '%'?'%' AND brand LIKE '%'?'%' AND price LIKE '%'?'%' AND country LIKE '%'?'%' ");
        $query = $this->db->prepare("SELECT * FROM products WHERE model LIKE '%$model%' AND brand LIKE '%$brand%' AND country LIKE '%$country%' AND price BETWEEN $minPrice AND $maxPrice");
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    function getProductsByCategory($fr_id){
        $query = $this->db->prepare('SELECT * FROM products WHERE id_categories_fk = ?');
        $query->execute([$fr_id]);

        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    function getProductById($id){
        $query = $this->db->prepare('SELECT * FROM products WHERE id = ?');
        $query->execute([$id]);

        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    function getMaxPrice(){
        $query = $this->db->prepare('SELECT * FROM products ORDER BY price DESC');
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_OBJ);
        if(!empty($query))
            return $result[0]->price;
        else
            return 0;
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