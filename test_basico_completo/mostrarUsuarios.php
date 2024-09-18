<?php
$con = new mysqli('localhost', 'root', '', 'instagram_mvc');

$query = $con->query('SELECT * FROM usuarios');

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>1
</head>
<body>

    <table>
   		<thead>
   			<tr>
   				<td>Usuarios</td>
   				<td>Constraseña</td>
   				<td>Nombre real</td>
   			</tr>
   		</thead>
   		<tbody>
    <?php

    while ($usuario = $query->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $usuario['username'] . "</td>";
        echo "<td>" . $usuario['password'] . "</td>";
        echo "<td>" . $usuario['nombre'] . "</td>";
        echo "</tr>";
    }
    ?>
    	</tbody>
    </table>
</body>
</html>