<?php
require_once __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>

<body>
    <form action="<?php echo BASE_URL; ?>Controller/C_updateUsuario.php" method="post">
        <input type="text" name="username" value="<?php echo $usuario->getUsername(); ?>" readonly>
        <input type="text" name="nombre" value="<?php echo $usuario->getNombre(); ?>" placeholder="nombre">
        <input type="password" name="password" value="<?php echo $usuario->getPassword(); ?>" placeholder="password">
        <input type="submit" value="Guardar">
    </form>
    </form>
</body>

</html>