<?php
header('Access-Control-Allow-Origin: https://bsaleforntend-production.up.railway.app/');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');
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