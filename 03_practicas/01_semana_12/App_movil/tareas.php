<?php
session_start();

$tareas = [
    "Hacer tarea de programación",
    "Estudiar para examen",
    "Leer documentación",
    "Practicar código"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tareas</title>

    <link rel="stylesheet" href="estilos.css">

</head>
<body>

<header>
    <h2>Tus tareas</h2>
</header>

<main>

    <?php foreach($tareas as $tarea): ?>

        <div class="card">
            <?php echo $tarea; ?>
        </div>

    <?php endforeach; ?>

    <a href="index.php" class="btn">Volver</a>

</main>

</body>
</html>