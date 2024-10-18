<?php


// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Model/MUsuario.php');

// var_dump($_POST);
$username = $_POST['username'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];

$con = new Model\MUsuario();
$usuario["username"] = $username;
$usuario["password"] = $password;
$usuario["nombre"] = $nombre;
//   var_dump($usuario);
$con->insertUsuario($usuario);

header('Content-Type: application/json');

// Enviar el código de estado 200 (OK)
http_response_code(200);

// Si no quieres enviar ningún dato, solo un OK sin cuerpo, puedes simplemente devolver un JSON vacío
echo json_encode([]);
exit();
?>