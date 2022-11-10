<?php

include_once 'apistore.php';


//Instacia de apiStore
$api = new ApiStore();

//Switch dependiendo del method recibido
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['categoryid'])){
            //obtiene los productos por categoria
            $api->getProductsByCategoryAPI($_GET['categoryid']);

        }else{
            //obtiene todos las categorias
            $api->getAllCategories();
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