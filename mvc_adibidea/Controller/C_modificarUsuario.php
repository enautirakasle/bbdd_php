<?php

use Model\Conexion;

require_once __DIR__ . '/../config.php';
require_once '../Model/Conexion.php';

$username = $_GET['username'];

$conexion = new Conexion();
$usuario = $conexion->getUser($username);

require_once '../Views/V_formModificarUsuario.php';
