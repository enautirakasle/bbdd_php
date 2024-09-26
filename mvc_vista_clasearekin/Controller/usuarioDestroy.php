<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios


// Incluye el archivo de configuración
require_once __DIR__ . '/../config.php';

// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Model/MUsuario.php');

$username = $_GET['username'];

$con = new Model\MUsuario();
$con->eliminarUsuario( $username );

header("Location: usuarios.php");
exit();
?>
