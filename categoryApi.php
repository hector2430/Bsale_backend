<?php

include_once 'apistore.php';
header('Access-Control-Allow-Origin: *');

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