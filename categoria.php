<?php
include_once 'db.php';

//clase categoria
class Category extends DB{

    //obtiene todas las categorias
    function getCategories(){

        $query =$this->connect()->query('SELECT c.*, COUNT(p.id) AS total FROM category c LEFT JOIN product p ON p.category=c.id GROUP BY c.id');

        return $query;
    }


}