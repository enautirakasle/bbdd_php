<?php
require_once __DIR__ . '/../modelo/MUsuario.php';
require_once __DIR__ . '/../vista/VUsuario.php';

session_start();
if(isset($_SESSION['usuario_logueado'])){
    VUsuario::inithtml();
    VUsuario::desktop();
    VUsuario::endhtml();
}else{
    VUsuario::inithtml();
    echo 'kanpoan zaude';
    VUsuario::endhtml();
}