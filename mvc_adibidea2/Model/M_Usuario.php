<?php
namespace Model;
require_once 'Conexion.php';

class M_Usuario extends Conexion
{
    public function getUsers(){
        $query = parent::con()->query('SELECT * FROM usuarios');
        
        $retorno = [];
        
        while($fila = $query->fetch_assoc()){
            $retorno[] = $fila;
        }
        
        return  $retorno;
    }
    
    public function insertUsuario($usuario){
        $sentencia = parent::con()->prepare("INSERT INTO usuarios(username, password, nombre) VALUES (?,?,?)");
        
        $sentencia->bind_param("sss", $usuario->username, $usuario->password, $usuario->nombre);
        
        $sentencia->execute();
        $sentencia->close();
    }
}

