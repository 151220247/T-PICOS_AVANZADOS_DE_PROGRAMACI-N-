<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $edad = trim($_POST["edad"]);
    $accion = $_POST["accion"];

    // Validación básica
    if (empty($nombre) || empty($correo) || empty($edad)) {
        echo "<h3 style='color:red'>Error: Todos los campos son obligatorios.</h3>";
        exit();
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<h3 style='color:red'>Error: Correo no válido.</h3>";
        exit();
    }

    // Eventos
    if ($accion == "guardar") {

        echo "<h2>Información guardada correctamente</h2>";

        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Correo:</strong> $correo</p>";
        echo "<p><strong>Edad:</strong> $edad</p>";

    } elseif ($accion == "validar") {

        echo "<h2>Validación Exitosa</h2>";

        echo "<p>Todos los datos cumplen los requisitos.</p>";

    } else {

        echo "<h2>Acción no reconocida</h2>";

    }

} else {

    echo "Acceso no permitido.";

}
?>