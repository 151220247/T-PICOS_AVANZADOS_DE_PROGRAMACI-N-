<?php
session_start();

if(!isset($_SESSION['usuario'])){
    $_SESSION['usuario'] = "elias";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <!-- Responsive obligatorio -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>App Tareas</title>

    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
    <h2>Hola, <?php echo $_SESSION['usuario']; ?> </h2>
</header>

<main>

    <p>Administra tus tareas rápidamente</p>

    <a href="tareas.php" class="btn">Ver tareas</a>

</main>

</body>
</html>