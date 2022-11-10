<?php
include_once 'apistore.php';
header('Access-Control-Allow-Origin: https://bsaleforntend-production.up.railway.app/');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');



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