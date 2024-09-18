<?php

use Model\Conexion;
use Model\Usuario;
require_once '../Model/Usuario.php';
require_once '../Model/Conexion.php';

$username = $_GET['id'];

$con = new Conexion();
$con->eliminarUsuario($username);

header("Location: C_verUsuarios.php");
exit();
?>
