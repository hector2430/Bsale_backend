<?php
header('Access-Control-Allow-Origin: *');
include_once 'apistore.php';

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