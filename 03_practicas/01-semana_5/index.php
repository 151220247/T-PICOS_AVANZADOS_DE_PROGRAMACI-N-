<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Registro de Empleados</title>

<link rel="stylesheet" href="css/estilos.css">

</head>

<body>

<h2>Registro de Empleados</h2>

<form action="procesar.php" method="post">

<label>Nombre:</label><br>
<input type="text" name="nombre" required>
<br><br>

<label>Correo:</label><br>
<input type="email" name="correo" required>
<br><br>

<label>Edad:</label><br>
<input type="number" name="edad" required>
<br><br>

<label>Fecha de ingreso:</label><br>
<input type="date" name="fecha_ingreso" required>
<br><br>

<label>Puesto:</label><br>
<input type="text" name="puesto" required>
<br><br>

<button type="submit">Guardar Empleado</button>

</form>

<br>

<a href="listar.php">Ver empleados registrados</a>

</body>
</html>