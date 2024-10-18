<?php


// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Model/MUsuario.php');

// Incluye el archivo que contiene la clase VUsuario (Vista de Usuario)
require_once(__DIR__ . '/../Views/VUsuario.php');

$con = new Model\MUsuario();
$usuarios = $con->getUsers();

header('Content-Type: application/json');

// Convertir el objeto/array a JSON
echo json_encode($usuarios);



?>