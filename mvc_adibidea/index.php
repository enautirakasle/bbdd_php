<?php
//hemendik https://www.youtube.com/watch?v=JWi4_8_d-RM&t=485s
require 'Controller/C_verUsuarios.php';
/*
// Conexión a la base de datos MySQL
$conexion = new mysqli('localhost', 'root', '', 'instagram_mvc');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos Instagram MVC";


// Consulta SQL para obtener los usuarios
$consulta = "SELECT nombre, username, password FROM usuarios";
$resultado = $conexion->query($consulta);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    echo "<h2>Lista de Usuarios:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Username</th><th>Password</th></tr>";
    
    // Mostrar los datos de cada usuario
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>" . $fila["username"] . "</td>";
        echo "<td>" . $fila["password"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No se encontraron usuarios en la base de datos.";
}



// Cerrar la conexión cuando hayas terminado
$conexion->close();
*/
?>


