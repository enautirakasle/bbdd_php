<?php
namespace Model;
require_once 'Conexion.php';
require_once 'Usuario.php';     


class MUsuario extends Conexion {
    public function getUser($username){
        $sentencia = $this->getCon()->prepare("SELECT * FROM usuarios WHERE username = ?");
        
        $sentencia->bind_param("s", $username);
        
        $sentencia->execute();
        
        $resultado = $sentencia->get_result();
        
        if ($fila = $resultado->fetch_assoc()) {
            return new Usuario($fila['username'], $fila['password'], $fila['nombre']);
        }
        
        $sentencia->close();
        
        return null;
    }
    
    public function getUsers(){
        $query = $this->getCon()->query('SELECT * FROM usuarios');
        
        $retorno = [];
        
        while($fila = $query->fetch_assoc()){
            $retorno[] = new Usuario($fila['username'], $fila['password'], $fila['nombre']);
        }
    
        return  $retorno;
    }

    public function getUsersAssoc(){
        $query = $this->getCon()->query('SELECT * FROM usuarios');
        
        $retorno = [];
        
        while($fila = $query->fetch_assoc()){
            $retorno[] = $fila;
        }
    
        return  $retorno;
    }
    
    public function insertUsuario($usuario){
        $sentencia = $this->getCon()->prepare("INSERT INTO usuarios(username, password, nombre) VALUES (?,?,?)");
        
        $sentencia->bind_param("sss", $usuario->getUsername(), $usuario->getPassword(), $usuario->getNombre());
        
        $sentencia->execute();
        $sentencia->close();
    }

    public function eliminarUsuario($username){
        $sentencia = $this->getCon()->prepare("DELETE FROM usuarios WHERE username = ?");
        
        $sentencia->bind_param("s", $username);
        
        $sentencia->execute();
        $sentencia->close();
    }

    public function modificarUsuario($usuario){
        $sentencia = $this->getCon()->prepare("UPDATE usuarios SET password = ?, nombre = ? WHERE username = ?");
        
        $password = $usuario->getPassword();
        $nombre = $usuario->getNombre();
        $username = $usuario->getUsername();
        
        $sentencia->bind_param("sss", $password, $nombre, $username);
        
        $sentencia->execute();
        $sentencia->close();
    }

}
