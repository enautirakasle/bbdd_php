<?php

require_once __DIR__ . '/../modelo/MUsuario.php';
require_once __DIR__ . '/../vista/Vista.php';

Vista::inithtml();
Vista::formLogin();
Vista::endhtml();

?>