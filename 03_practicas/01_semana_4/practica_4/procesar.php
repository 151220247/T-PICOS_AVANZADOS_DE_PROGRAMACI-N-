<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "Acceso no permitido";
    exit;
}

// ===============================
// 1. CAPTURA DE DATOS
// ===============================

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$edad = $_POST["edad"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$puesto = $_POST["puesto"];

// ===============================
// 2. MANEJO DE STRINGS
// ===============================

// Convertir nombre a mayúsculas
$nombre_transformado = strtoupper($nombre);

// Longitud del nombre
$longitud_nombre = strlen($nombre);

// ===============================
// 3. VALIDACIÓN CON FILTROS
// ===============================

$correo_valido = filter_var($correo, FILTER_VALIDATE_EMAIL);
$edad_valida = filter_var($edad, FILTER_VALIDATE_INT);

// ===============================
// 4. MANEJO DE FECHAS
// ===============================

$fecha_actual = date("Y-m-d");

$dias_transcurridos = floor(
    (strtotime($fecha_actual) - strtotime($fecha_ingreso)) / (60 * 60 * 24)
);

// ===============================
// 5. ORGANIZAR DATOS EN ARREGLO
// ===============================

$empleado = [
    "nombre" => $nombre_transformado,
    "correo" => $correo,
    "correo_valido" => $correo_valido ? "Válido" : "Inválido",
    "edad" => $edad,
    "dias_transcurridos" => $dias_transcurridos,
    "puesto" => $puesto
];

// ===============================
// 6. CONVERTIR A JSON
// ===============================

$json = json_encode($empleado);

// ===============================
// 7. DECODIFICAR JSON
// ===============================

$datos = json_decode($json, true);

// ===============================
// 8. MANEJO DE ARREGLOS Y ESTADÍSTICAS
// ===============================

$registros = [$datos];

$total_registros = count($registros);

$edades = [$edad];
$promedio_edad = array_sum($edades) / count($edades);

$correos_invalidos = $correo_valido ? 0 : 1;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reporte</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="contenedor">
    <h2>Reporte Generado</h2>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
            <th>Días desde ingreso</th>
            <th>Puesto</th>
        </tr>

        <?php foreach ($registros as $r): ?>
        <tr>
            <td><?php echo $r["nombre"]; ?></td>
            <td><?php echo $r["correo_valido"]; ?></td>
            <td><?php echo $r["edad"]; ?></td>
            <td><?php echo $r["dias_transcurridos"]; ?></td>
            <td><?php echo $r["puesto"]; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <h3>Estadísticas</h3>

    <p>Total de registros: <?php echo $total_registros; ?></p>
    <p>Promedio de edad: <?php echo $promedio_edad; ?></p>
    <p>Correos inválidos: <?php echo $correos_invalidos; ?></p>

    <br>
    <a href="index.php">Volver</a>

</div>

</body>
</html>