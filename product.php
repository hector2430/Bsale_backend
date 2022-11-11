<?php
header('Access-Control-Allow-Origin: https://bsaleforntend-production.up.railway.app/');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');
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