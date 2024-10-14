<?php
require_once __DIR__ . '/../vista/Vista.php';

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

Vista::inithtml();

if($_SESSION['usuario_logueado']['rol'] == 'admin'){
    Vista::adminDesktop();

}else if($_SESSION['usuario_logueado']['rol'] == 'user'){
    Vista::userDesktop();
}

Vista::endhtml();
