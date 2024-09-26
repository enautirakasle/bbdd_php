<?php
namespace Model;
require_once 'Usuario.php';


class Conexion
{
    private $con;
    
    public function __construct(){
        $this->con = new \mysqli('localhost', 'root', '', 'instagram_mvc');
        
    }

    public function getCon(){
        return $this->con;
    }

    public function closeCon(){
        $this->con->close();
    }   

 
}

