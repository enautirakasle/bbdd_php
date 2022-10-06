<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        th,td,table{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 1em;
            text-align: center;
            
        }
        body > *{
            margin:3em;
        }
        a{
            text-decoration: none;
            color:inherit
        }
    </style>
</head>

<body>
    
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mysqli = new mysqli("localhost", "root", "", "test");
            if ($mysqli->connect_errno) {
                echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            /* Sentencia no preparada */
            $resultado = $mysqli->query("SELECT dni,nombre FROM alumnos");

            // mostrar resultado
            while ($row = $resultado->fetch_assoc()) {
               
                echo "<tr>";
                echo "<td>{$row["dni"]}</td>";
                echo "<td>{$row["nombre"]}</td>";
                echo "<td><a href='AlumnoForm.php?dni={$row["dni"]}'><span style='font-size:1.8em'>&#9999;</span></a></td>";
                echo "<td><a href='delete.php?dni={$row["dni"]}'><span style='font-size:1.8em; color:red'>&#128465;</span></a></td>";
                echo "</tr>";
            }

            /* se recomienda el cierre explícito */
            $mysqli->close();

            ?>
            <tr>
                <td colspan="4"><a href="AlumnoForm.php"><span>&#10133;</span></a></td>
            </tr>
        </tbody>


    </table>
</body>

</html>