<?php

use Model\Conexion;

require(__DIR__ . '/../Model/Conexion.php');

$con = new Conexion();

$usuarios = $con->getUsers();

require (__DIR__ . '/../Views/V_verUsuarios.php');

?>