<?php
// Start Generation Here
require_once __DIR__ . '/../modelo/MUsuario.php';
require_once __DIR__ . '/../vista/Vista.php';

$username = $_POST['username'];
$password = $_POST['password'];

if ($usuario = MUsuario::usuarioDelSistema($username, $password)) {
    // Start Generation Here
    session_start();
    $_SESSION['usuario_logueado'] = $usuario;

    header('Location: desktop.php');

} else {
    header("Location: loginForm.php");
}
