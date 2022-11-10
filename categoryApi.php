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

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['categoryid'])){
            $api->getProductsByCategoryAPI($_GET['categoryid']);

        }else{
            $api->getAllCategories();
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