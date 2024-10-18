<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios



// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Model/MUsuario.php');

$username = $_GET['username'];

$con = new Model\MUsuario();
$con->eliminarUsuario( $username );

header('Content-Type: application/json');

// Enviar el código de estado 200 (OK)
http_response_code(200);

// Si no quieres enviar ningún dato, solo un OK sin cuerpo, puedes simplemente devolver un JSON vacío
echo json_encode([]);
?>
