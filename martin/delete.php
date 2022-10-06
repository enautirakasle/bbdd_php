
<?php
if (isset($_GET['dni'])) {
    $dni= $_GET['dni'];

    $mysqli = new mysqli("localhost", "root", "", "test");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("DELETE FROM alumnos WHERE dni=?"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("s", $dni)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    header("Location: index.php");
    exit;
    /* Sentencia no preparada */
   // $resultado = $mysqli->query("SELECT * FROM test");
   // var_dump($resultado->fetch_all());
}else{
    echo("<br>Error en parametros<br>");
    
}






?>

