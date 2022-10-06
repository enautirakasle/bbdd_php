<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <style>
        .form-field{
            display: flex;
            flex-direction: column;
            margin:1em;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form{
            margin:2em;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $fichero = isset($_GET['dni']) ? 'update.php' : 'insert.php';
    
    $alumno = [
        'nombre' => '',
        'dni'    => '',
        'email'  => '',
        'codmatricula' => '',
        'ciclo'  => ''
    ];
    echo "<form action='$fichero' method='post'>";

    if (isset($_GET['dni'])) {
        $mysqli = new mysqli("localhost", "root", "", "test");
        if ($mysqli->connect_errno) {
            echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        /* Sentencia no preparada */
        
        $stmt = $mysqli->prepare("SELECT * FROM alumnos where dni=?");
        $stmt->bind_param("s",$_GET['dni']);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if($row = $resultado->fetch_assoc()){
            $alumno = $row;
        };
        $mysqli->close();

    }
    foreach ($alumno as $campo=>$valor){
        echo '<div class="form-field">';
        echo "<label for='{$campo}'>".strtoupper($campo)."</label>";
        echo "<input type='text' name='{$campo}' id='{$campo}' value= '{$valor}'>";
        echo "</div>";
    }
    ?>
  

    <div class="form-field">
        <button type="submit">Enviar</button>
    </div>
    
    </form>
</body>

</html>