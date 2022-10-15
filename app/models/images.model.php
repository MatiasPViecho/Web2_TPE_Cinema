<?php

class imagesModel{
    private $db;

    function __construct(){
        $this->connect();
    }

    function connect(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_cinemastore;charset=utf8', 'root', '');
    }

    function addImage($fk_id, $img){
        $path = $this->uploadImage($img);
        $query = $this->db->prepare('INSERT INTO images (id_products_fk, path) VALUES (?, ?)');
        $query->execute([$fk_id, $path]);
    }
    function getAll(){
        $query = $this->db->prepare('SELECT * FROM images');
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    private function uploadImage($image){
        $target = 'img/products' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }

    function deleteImage($id){
        // deletes image by id of foreign key
        $query = $this->db->prepare('DELETE FROM images WHERE id_products_fk = ?');
        $query->execute([$id]);
    }
}