<?php
// Start Generation Here

use Model\MUsuario;

require_once __DIR__ . '/../modelo/MUsuario.php';
require_once __DIR__ . '/../vista/VUsuario.php';

VUsuario::inithtml();
VUsuario::formLogin();
VUsuario::endhtml();

?>