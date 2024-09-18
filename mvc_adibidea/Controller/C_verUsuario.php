<?php

use Model\Conexion;

require(__DIR__ . '/../Model/Conexion.php');

$username = $_GET['username'];

$con = new Conexion();
$usuarios = $con->getUser($username);

require (__DIR__ . '/../Views/V_verUsuario.php');

?>