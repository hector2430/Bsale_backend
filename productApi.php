<?php
include_once 'apistore.php';
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

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