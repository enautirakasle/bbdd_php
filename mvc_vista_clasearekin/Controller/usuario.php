<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios


// Incluye el archivo de configuración
require_once __DIR__ . '/../config.php';

// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Model/Conexion.php');

// Incluye el archivo que contiene la clase VUsuario (Vista de Usuario)
require_once(__DIR__ . '/../Views/VUsuario.php');
$username = $_GET['username'];

$con = new Model\Conexion();
$usuario = $con->getUser($username);

$vista = new VUsuario();
$vista->inithtml();
$vista->verUsuario($usuario);
$vista->endhtml();

?>