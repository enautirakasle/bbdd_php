<?php

// Incluye el archivo de configuración
require_once __DIR__ . '/../config.php';

// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Model/Conexion.php');


$username = $_POST['username'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];

$con = new Model\Conexion();
$usuario = new Model\Usuario($username, $password, $nombre);
//   var_dump($usuario);
echo $usuario->getUsername().$usuario->getPassword().$usuario->getNombre();
$con->insertUsuario($usuario);

header("Location: usuarios.php");
exit();
?>