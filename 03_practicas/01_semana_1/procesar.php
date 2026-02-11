<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $edad   = trim($_POST["edad"] ?? "");
    $accion = $_POST["accion"] ?? "";

    // Validación básica
    if ($nombre == "" || $correo == "" || $edad == "") {
        mensaje("Error: Todos los campos son obligatorios ❌");
        exit;
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        mensaje("Error: Formato de correo inválido ❌");
        exit;
    }

    if ($edad <= 0) {
        mensaje("Error: Edad no válida ❌");
        exit;
    }

    // Manejo de eventos
    if ($accion == "guardar") {
        mensaje("✅ Información guardada correctamente");
    } 
    elseif ($accion == "validar") {
        mensaje("✅ Datos validados correctamente");
    } 
    else {
        mensaje("⚠ Acción no reconocida");
    }
}

function mensaje($texto) {
    echo "
    <html>
    <head>
        <title>Resultado</title>
    </head>
    <body style='font-family: Arial; text-align:center; margin-top:50px;'>
        <h2>$texto</h2>
        <br>
        <a href='index.php'>Volver al formulario</a>
    </body>
    </html>
    ";
}
?>
