<?php
include_once 'db.php';
//clase porducto
class Product extends DB{

    //Metodo que busca todos los productos
    function getProducts(){

        $query =$this->connect()->query('SELECT * FROM product');
        
        return $query;
    }
    //Metodo que busca todos los productos por categoria
    function getProductsbyCategory($category){

        $query =$this->connect()->query('SELECT * FROM product where category = "'.$category.'"');
        return $query;
    }
    //Metodo que busca todos los productos por la busqueda del usuario
    function getProductsbyName($name){

        $query =$this->connect()->query('SELECT * FROM product where name LIKE "'.$name.'%"');
        return $query;
    }

}