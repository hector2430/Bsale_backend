<?php
include_once 'db.php';

class Product extends DB{

    function getProducts(){

        $query =$this->connect()->query('SELECT * FROM product');
        
        return $query;
    }
    function getProductsbyCategory($category){

        $query =$this->connect()->query('SELECT * FROM product where category = "'.$category.'"');
        return $query;
    }
    function getProductsbyName($name){

        $query =$this->connect()->query('SELECT * FROM product where name LIKE "'.$name.'%"');
        return $query;
    }

}