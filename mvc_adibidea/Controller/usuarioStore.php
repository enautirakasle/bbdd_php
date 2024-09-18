<?php

use Model\Conexion;
use Model\Usuario;

require_once __DIR__ . '/../config.php';
require_once '../Model/Usuario.php';
require_once '../Model/Conexion.php';

$username = $_POST['username'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];

$con = new Conexion();
$usuario = new Usuario($username, $password, $nombre);
//   var_dump($usuario);
echo $usuario->getUsername().$usuario->getPassword().$usuario->getNombre();
$con->insertUsuario($usuario);

header("Location: usuarios.php");
exit();
?>