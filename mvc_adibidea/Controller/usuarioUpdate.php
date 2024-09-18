<?php

use Model\Conexion;
use Model\Usuario;

require_once __DIR__ . '/../config.php';
require_once '../Model/Usuario.php';
require_once '../Model/Conexion.php';

$username = $_POST['username'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];

$con = new Conexion();
$usuario = new Usuario($username, $password, $nombre);

$con->modificarUsuario($usuario);

header("Location: usuarios.php");
exit();

// El exit() en la última línea es importante porque:
// 1. Asegura que no se ejecute ningún código adicional después de la redirección.
// 2. Evita que se envíen encabezados adicionales que podrían causar errores.
// 3. Mejora la seguridad al detener la ejecución del script inmediatamente después de la redirección.
// 4. Optimiza el rendimiento al finalizar el script de manera explícita.
