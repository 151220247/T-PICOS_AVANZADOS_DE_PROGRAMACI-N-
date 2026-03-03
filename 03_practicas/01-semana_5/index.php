<?php

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Registro de Empleados</title>
    </head>
    <body>
        <h2>Registro de Empleados</h2>

        <form action="procesar.php" method="post">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required>
            <input type="email" name="correo" require>
            <input type="number" name="edad" require>
            <input type="date" name="Fecha_ingreso" require>
            <input type="text" name="puesto" require>

            <button type="submit">Guardar Empleado</button>

            <a href="listar.php">Ver empleados registrados</a>
            
        </form>  
    
    
</body>
</html>