<?php

include_once 'categoria.php';
include_once 'product.php';
class ApiStore{

    function getAllCategories(){
        $category= new Category();
        $categories = array();
        $categories["category"] = array();

        $res = $category->getCategories();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $categoryrow= array(
                    'id'    => $row['id'],
                    'name'  => $row['name'],
                    'total'=>$row['total']
                );
                array_push($categories["category"],$categoryrow);
            }
            echo json_encode($categories); 
        }else{
            echo json_encode(array('mensaje' => 'No hay categorias'));
        }

    }
    function getAllProducts(){
        $product= new Product();
        $prodcuts = array();
        $prodcuts["product"] = array();

        $res = $product->getProducts();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $productrow= array(
                    'id'           => $row['id'],
                    'name'         => $row['name'],
                    'url_image'    => $row['url_image'],
                    'price'        => number_format($row['price'], 0, ",", "."),
                    'discount'     => $row['discount']
                  
                );
                array_push($prodcuts["product"],$productrow);
            }
            echo json_encode($prodcuts); 
        }else{
            echo json_encode(array('mensaje' => 'No hay categorias'));
        }

    }
    function getProductsByCategoryAPI($categoryid){
        $product= new Product();
        $prodcuts = array();
        $prodcuts["product"] = array();

        $res = $product->getProductsbyCategory($categoryid);

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $productrow= array(
                    'id'           => $row['id'],
                    'name'         => $row['name'],
                    'url_image'    => $row['url_image'],
                    'price'        => $row['price'],
                    'discount'     => $row['discount']
                  
                );
                array_push($prodcuts["product"],$productrow);
            }
            echo json_encode($prodcuts); 
        }else{
            echo json_encode(array('mensaje' => 'No hay productos de la categoria seleccionada'));
        }

    }
    function getProductsByNameAPI($name){
        $product= new Product();
        $prodcuts = array();
        $prodcuts["product"] = array();

        $res = $product->getProductsbyName($name);

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $productrow= array(
                    'id'           => $row['id'],
                    'name'         => $row['name'],
                    'url_image'    => $row['url_image'],
                    'price'        => $row['price'],
                    'discount'     => $row['discount']
                  
                );
                array_push($prodcuts["product"],$productrow);
            }
            echo json_encode($prodcuts); 
        }else{
            echo json_encode(array('mensaje' => 'No hay productos con el nombre buscado'));
        }

    }
}

?>