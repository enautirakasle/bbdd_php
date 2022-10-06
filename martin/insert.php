
<?php
if (isset($_POST['dni']) && isset($_POST['nombre'])) {
    $dni= $_POST['dni'];
    $nombre = $_POST['nombre'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $codmatricula = isset($_POST['codmatricula']) ? $_POST['codmatricula'] : '';
    $ciclo = isset($_POST['ciclo']) ? $_POST['ciclo'] : '';

    $mysqli = new mysqli("localhost", "root", "", "test");
    
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("INSERT INTO alumnos(dni,nombre,email,codmatricula,ciclo) VALUES (?, ?, ?, ?, ?)"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("sssss", $dni, $nombre,$email,$codmatricula,$ciclo)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    
    /* Sentencia no preparada */
    // $resultado = $mysqli->query("SELECT * FROM test");
    // var_dump($resultado->fetch_all());
    header("Location: index.php");
    exit;
}else{
    echo("<br>Error en parametros<br>");
    
}



?>

