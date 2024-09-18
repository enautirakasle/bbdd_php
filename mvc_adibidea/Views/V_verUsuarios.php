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
				<td>username</td>
				<td>Constraseña</td>
				<td>Nombre real</td>
				<td></td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($usuarios as $usuario) {
				echo "<tr>";
				echo "<td>" . $usuario['username'] . "</td>";
				echo "<td>" . $usuario['password'] . "</td>";
				echo "<td>" . $usuario['nombre'] . "</td>";
				echo "<td><a href='" . BASE_URL . "Controller/usuarioEdit.php?username=" . $usuario['username'] . "'>Modificar</a></td>";
				echo "<td><a href='" . BASE_URL . "Controller/usuarioDestroy.php?username=" . $usuario['username'] . "'>Eliminar</a></td>";
				echo "</tr>";
			}

			?>
		</tbody>
	</table>
</body>
</html>