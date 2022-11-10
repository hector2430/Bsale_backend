<?php
include_once 'apistore.php';



$api = new ApiStore();
//Switch dependiendo del method recibido

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['name'])){
            //obtiene los productos por nombre
            $api->getProductsByNameAPI($_GET['name']);

        }else{
            //obtiene todos los productos
            $api->getAllProducts();
        }
        
        break;
    case 'PUT':
        break;
    case 'POST':
        break;
    case 'DELETE':
        break;
    default:
        break;
}

?>