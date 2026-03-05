<?php
require_once "config/conexion.php";


try{      
    
$conexion = Conexion::conectar();
$sql = "SELECT * FROM empleados";
$smt = $conexion->prepare($sql);
$smt->execute();
$empleados = $smt->fetchAll(PDO::FETCH_ASSOC);
$total = count($empleados);

$promedioEdad = 0;
if ($total > 0){
    $sumaEdades = 0;
    foreach ($empleados as $emp){
        $sumaEdades += $emp['edad'];
    }
    $promedioEdad = $sumaEdades / $total;
}
$mayorAntiguedad = null;
$maxDias = 0;
foreach ($empleados as $emp){
    $fechaIngreso = new DateTime($emp['fecha_ingreso']);
    $hoy = new DateTime();
    $dias = $hoy->diff($fechaIngreso)->days;
    if ($dias > $maxDias){
        $maxDias = $dias;
        $mayorAntiguedad = $emp['nombre'];
    }
} 

}catch (Exception $e) {
    die("Error al consultar empleados");

}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Empleados</title>

        <link rel="stylesheet" href="css/estilos.css">
        
    </head>
    <body>


    <h2>Lista de Empleados</h2>

    <table border="1">  
         <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
            <th>Fecha de Ingreso</th>
            <th>Puesto</th>
            <th>Fecha de Registro</th>
        </tr>

<?php foreach ($empleados as $emp):?>

<tr>
    <td><?= $emp['id'] ?></td>
    <td><?= $emp['nombre'] ?></td>
    <td><?= $emp['correo'] ?></td>
    <td><?= $emp['edad'] ?></td>
    <td><?= $emp['fecha_ingreso'] ?></td>
    <td><?= $emp['puesto'] ?></td>
    <td><?= $emp['fecha_registro'] ?></td>
</tr>

<?php endforeach; ?>

    </table>

<h3>Estadísticas</h3>

<p>Total de empleados: <?= $total ?></p>
<p>Promedio de edad: <?= round($promedioEdad, 2) ?></p>
<p>Empleado con mayor antigüedad: <?= $mayorAntiguedad ?? "N/A" ?></p>

<a href="index.php">Volver</a>


</body>
</html>              

}