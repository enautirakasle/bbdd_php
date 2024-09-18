<?php

use Model\Usuario;
use Model\M_Usuario;
require_once 'Model/Usuario.php';
require_once 'Model/M_Usuario.php';

$username = $_POST['username'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];

$con = new M_Usuario();
$usuario = new Usuario($username, $password, $nombre);
//   var_dump($usuario);
echo $usuario->getUsername().$usuario->getPassword().$usuario->getNombre();
$con->insertUsuario($usuario);
$con->close();

header("Location: C_verUsuarios.php");
exit();
?>