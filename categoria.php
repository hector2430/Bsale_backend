<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
include_once 'db.php';

//clase categoria
class Category extends DB{

    //obtiene todas las categorias
    function getCategories(){

        $query =$this->connect()->query('SELECT c.*, COUNT(p.id) AS total FROM category c LEFT JOIN product p ON p.category=c.id GROUP BY c.id');

        return $query;
    }


}