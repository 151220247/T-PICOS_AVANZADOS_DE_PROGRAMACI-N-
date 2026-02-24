<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Empleados - TechSolutions</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="contenedor">
    <h2>Registro de Empleados</h2>

    <form action="procesar.php" method="POST">

        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>

        <label>Correo electrónico:</label>
        <input type="email" name="correo" required>

        <label>Edad:</label>
        <input type="number" name="edad" required>

        <label>Fecha de ingreso:</label>
        <input type="date" name="fecha_ingreso" required>

        <label>Puesto o área:</label>
        <select name="puesto" required>
            <option value="">Seleccione</option>
            <option value="Soporte">Soporte</option>
            <option value="Desarrollo">Desarrollo</option>
            <option value="Administración">Administración</option>
        </select>

        <button type="submit">Registrar</button>

    </form>
</div>

</body>
</html>