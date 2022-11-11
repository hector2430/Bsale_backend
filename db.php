<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

//Clase Base de datos
class DB{
    private $host;
    private $db;
    private $user;
    private $password;

    //constructor de la clase
    public function __construct(){
        $this->host     = 'mdb-test.c6vunyturrl6.us-west-1.rds.amazonaws.com';
        $this->db       = 'bsale_test';
        $this->user     = 'bsale_test';
        $this->password = 'bsale_test';
    }
    //Creacion metodo para realizar conexion
    function connect(){
    
        try{

            $connection = "mysql:host=".$this->host.";dbname=" . $this->db;
            $pdo = new PDO($connection,$this->user,$this->password);
            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}


?>