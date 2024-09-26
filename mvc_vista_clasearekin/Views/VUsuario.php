

<?php

require_once __DIR__ . '/Vista.php';

class VUsuario extends Vista {
    // La clase VUsuario hereda de Vista (definida en General.php)
    // No se incluyen métodos adicionales según las instrucciones de seguimiento
    public function tablaUsuarios($usuarios) {
        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Nombre</th>';
        echo '<th>Email</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($usuarios as $usuario) {
            echo '<tr>';
            echo '<td>' . $usuario['id'] . '</td>';
            echo '<td>' . $usuario['nombre'] . '</td>';
            echo '<td>' . $usuario['email'] . '</td>';
            echo '</tr>';
        }       
        echo '</tbody>';
        echo '</table>';    
    }

    public function formUsuario() {
        echo '<form action="index.php" method="post">';
        echo '<div class="mb-3">';
        echo '<label for="username" class="form-label">Nombre de usuario</label>';
        echo '<input type="text" class="form-control" id="username" name="username" required>';
        echo '</div>';
        echo '<div class="mb-3">';
        echo '<label for="nombre" class="form-label">Nombre</label>';
        echo '<input type="text" class="form-control" id="nombre" name="nombre" required>';
        echo '</div>';
        echo '<div class="mb-3">';
        echo '<label for="password" class="form-label">Contraseña</label>';
        echo '<input type="password" class="form-control" id="password" name="password" required>';
        echo '</div>';
        echo '<button type="submit" class="btn btn-primary">Guardar</button>';
        echo '</form>';
    }   

    public function formEditUsuario($usuario) {
        echo '<form action="index.php" method="post">';
        echo '<div class="mb-3">';
        echo '<label for="nombre" class="form-label">Nombre</label>';
        echo '<input type="text" class="form-control" id="nombre" name="nombre" value="' . $usuario->getNombre() . '" required>';
        echo '</div>';
        echo '<div class="mb-3">';
        echo '<label for="username" class="form-label">Username</label>';
        echo '<input type="text" class="form-control" id="username" name="username" value="' . $usuario->getUsername() . '" required>';
        echo '</div>';
        echo '<div class="mb-3">';
        echo '<label for="password" class="form-label">Contraseña</label>';
        echo '<input type="password" class="form-control" id="password" name="password" value="' . $usuario->getPassword() . '" required>';
        echo '</div>';
        echo '<button type="submit" class="btn btn-primary">Guardar</button>';
        echo '</form>';


    }
}

?>

