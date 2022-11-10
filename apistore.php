<?php

include_once 'categoria.php';
include_once 'product.php';
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');

//Clase de API
class ApiStore{

    //obtiene todas las categorias
    function getAllCategories(){
        $category= new Category();
        $categories = array();
        $categories["category"] = array();

        $res = $category->getCategories();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $categoryrow= array(
                    'id'    => $row['id'],
                    'name'         => utf8_encode( $row['name']),
                    'total'=>$row['total']
                );
                array_push($categories["category"],$categoryrow);
            }
            //Retorna json con todas las categorias
            echo json_encode($categories); 
        }else{
            echo json_encode(array('mensaje' => 'No hay categorias'));
        }

    }


    //obtiene todos los productos
    function getAllProducts(){
        $product= new Product();
        $prodcuts = array();
        $prodcuts["product"] = array();

        $res = $product->getProducts();
        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $productrow= array(
                    'id'           => $row['id'],
                    'name'         => utf8_encode( $row['name']),
                    'url_image'    => $row['url_image'],
                    'price'        => number_format($row['price'], 0, ",", "."),
                    'discount'     => $row['discount']
                  
                );
                array_push($prodcuts["product"],$productrow);
            }
            //Retorna json con todos los productos
            echo json_encode( $prodcuts);
        }else{
            echo json_encode(array('mensaje' => 'No hay categorias'));
        }

    }
    //obtiene todos los productos por categoria
    function getProductsByCategoryAPI($categoryid){
        $product= new Product();
        $prodcuts = array();
        $prodcuts["product"] = array();

        $res = $product->getProductsbyCategory($categoryid);

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $productrow= array(
                    'id'           => $row['id'],
                    'name'         => utf8_encode( $row['name']),
                    'url_image'    => $row['url_image'],
                    'price'        => $row['price'],
                    'discount'     => $row['discount']
                  
                );
                array_push($prodcuts["product"],$productrow);
            }
            //Retorna json con todos los productos por categoria
            echo json_encode($prodcuts); 
        }else{
            echo json_encode(array('mensaje' => 'No hay productos de la categoria seleccionada'));
        }

    }
    //obtiene todos los productos por nombre
    function getProductsByNameAPI($name){
        $product= new Product();
        $prodcuts = array();
        $prodcuts["product"] = array();

        $res = $product->getProductsbyName($name);

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $productrow= array(
                    'id'           => $row['id'],
                    'name'         => utf8_encode( $row['name']),
                    'url_image'    => $row['url_image'],
                    'price'        => $row['price'],
                    'discount'     => $row['discount']
                  
                );
                array_push($prodcuts["product"],$productrow);
            }
            //Retorna json con todos los productos por nombre
            echo json_encode($prodcuts); 
        }else{
            echo json_encode(array('mensaje' => 'No hay productos con el nombre buscado'));
        }

    }
}

?>