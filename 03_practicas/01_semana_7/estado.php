<?php
require_once "cinexion.php";

echo "<h2>ESTADO ACTUAL</h2>";

echo "Tarea 1: " . @file_get_contents("estado de tarea 1.txt") . "<br>";
echo "Tarea 2: " . @file_get_contents("estado de tarea2.txt") . "<br>";

echo "<h2>LOG (archivo)</h2>";
echo "<pre>" . @file_get_contents("log.txt") . "</pre>";

echo "<h2>LOG (base de datos)</h2>";

$con = Conexion::conectar();
$res = $con->query("SELECT * FROM eventos ORDER BY fecha DESC");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Tarea</th>
<th>Mensaje</th>
</tr>";

foreach($res as $row){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fecha']}</td>
    <td>{$row['tarea']}</td>
    <td>{$row['mensaje']}</td>
    </tr>";
}

echo "</table>";

echo "<br><a href='index.php'>Volver</a>";