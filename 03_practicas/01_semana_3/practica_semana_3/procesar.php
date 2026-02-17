<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "Acceso no permitido";
    exit;
}

// VALIDAR RADIO
if (!isset($_POST["genero"])) {
    echo "Error: No seleccionaste género";
    exit;
}

// VALIDAR CHECKBOX
if (!isset($_POST["intereses"])) {
    echo "Error: No seleccionaste intereses";
    exit;
}

// VALIDAR SELECT
if (empty($_POST["ciudad"])) {
    echo "Error: No seleccionaste ciudad";
    exit;
}

// RECIBIR DATOS
$genero = $_POST["genero"];
$intereses = $_POST["intereses"]; // arreglo
$ciudad = $_POST["ciudad"];

echo "<h2>Formulario procesado correctamente </h2>";

echo "<p><strong>Género:</strong> $genero</p>";

echo "<p><strong>Intereses:</strong></p><ul>";
foreach ($intereses as $i) {
    echo "<li>$i</li>";
}
echo "</ul>";

echo "<p><strong>Ciudad:</strong> $ciudad</p>";

echo "<a href='index.php'>Volver</a>";

?>
