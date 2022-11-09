<?php
include_once 'apistore.php';


$api = new ApiStore();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['name'])){
            $api->getProductsByNameAPI($_GET['name']);

        }else{
            $api->getAllProducts();
        }
        
        break;
    case 'PUT':
        # code...
        break;
    case 'POST':
       
        break;
    case 'DELETE':
        # code...
        break;
    default:
        # code...
        break;
}

?>