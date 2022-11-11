<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

include_once 'db.php';

//clase categoria
class Category extends DB{

    //obtiene todas las categorias
    function getCategories(){

        $query =$this->connect()->query('SELECT c.*, COUNT(p.id) AS total FROM category c LEFT JOIN product p ON p.category=c.id GROUP BY c.id');

        return $query;
    }


}