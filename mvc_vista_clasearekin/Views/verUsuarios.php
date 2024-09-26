<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Lista de usuarios</title>
</head>
<body>
	<a href="<?php echo BASE_URL; ?>Controller/usuarioCreate.php">Insertar usuario</a>
	<table>
		<thead>
			<tr>
				<th>username</th>
				<th>Constraseña</th>
				<th>Nombre real</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($usuarios as $usuario) {
				echo "<tr>";
				echo "<td>" . $usuario->getUsername() . "</td>";
				echo "<td>" . $usuario->getPassword() . "</td>";
				echo "<td>" . $usuario->getNombre() . "</td>";
				echo "<td><a href='" . BASE_URL . "Controller/usuario.php?username=" . $usuario->getUsername() . "'>Ver</a></td>";
				echo "<td><a href='" . BASE_URL . "Controller/usuarioEdit.php?username=" . $usuario->getUsername() . "'>Modificar</a></td>";
				echo "<td><a href='" . BASE_URL . "Controller/usuarioDestroy.php?username=" . $usuario->getUsername() . "'>Eliminar</a></td>";
				echo "</tr>";
			}

			?>
		</tbody>
	</table>
</body>
</html>