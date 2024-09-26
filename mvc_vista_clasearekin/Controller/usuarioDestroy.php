<?php

use Model\Conexion;
use Model\Usuario;

require_once __DIR__ . '/../config.php';
require_once '../Model/Usuario.php';
require_once '../Model/Conexion.php';

$username = $_GET['username'];

$con = new Conexion();
$con->eliminarUsuario($username);

header("Location: usuarios.php");
exit();
?>
