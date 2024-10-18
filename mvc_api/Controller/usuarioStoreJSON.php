<?php

// Asegúrate de que la solicitud sea POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Establece el tipo de respuesta como JSON
    header('Content-Type: application/json');

    // Lee los datos crudos del cuerpo de la solicitud (JSON)
    $data = file_get_contents("php://input");

    // Decodifica el JSON recibido
    $usuario = json_decode($data, true); // El 'true' convierte el JSON a un array asociativo

    // Verifica si se recibieron los datos correctamente
    if (isset($usuario['username'], $usuario['nombre'], $usuario['password'])) {
        // Procesa los datos
        $username = $usuario['username'];
        $nombre = $usuario['nombre'];
        $password = $usuario['password'];

        // Aquí puedes llamar a tu lógica de inserción de usuario
        // Ejemplo:
        require(__DIR__ . '/../Model/MUsuario.php');
        $con = new Model\MUsuario();
        
        // Crea el array para insertar el usuario
        $newUser = [
            'username' => $username,
            'password' => $password,
            'nombre'   => $nombre
        ];

        // Inserta el usuario
        $con->insertUsuario($newUser);

        // Enviar respuesta de éxito
        http_response_code(200);
        echo json_encode([
            'status' => 'OK',
            'message' => 'Usuario creado correctamente',
        ]);
    } else {
        // Enviar respuesta de error si faltan datos
        http_response_code(400);
        echo json_encode([
            'status' => 'ERROR',
            'message' => 'Faltan parámetros en la solicitud',
        ]);
    }
} else {
    // Si no es una solicitud POST, devolver método no permitido
    http_response_code(405); // Método no permitido
    echo json_encode([
        'status' => 'ERROR',
        'message' => 'Método no permitido',
    ]);
}

?>
