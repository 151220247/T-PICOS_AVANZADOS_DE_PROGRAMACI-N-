
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="contenedor">
    <h2>Registro de Usuario</h2>

    <form action="procesar.php" method="POST">
        <h2><input type="text" name="nombre" placeholder="Nombre"><h2>
        <h2><input type="email" name="correo" placeholder="Correo electrónico"><h2>
        <h2><input type="number" name="edad" placeholder="Edad"><h2>

        <!-- Eventos -->
        <button type="submit" name="accion" value="guardar">Guardar</button>
        <button type="submit" name="accion" value="validar">Validar</button>
        <button type="reset">Limpiar</button>
    </form>
</div>

</body>
</html>
