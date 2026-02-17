<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con Validaciones</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- JavaScript -->
    <script src="js/validaciones.js"></script>
</head>
<body>

<div class="contenedor">
    <h2>Formulario de Selección</h2>

    <!-- onsubmit llama a JS -->
    <form action="procesar.php" method="POST" onsubmit="return validarFormulario();">

        <!-- RADIO BUTTONS -->
        <p><strong>Selecciona tu género:</strong></p>
        <input type="radio" name="genero" value="Masculino"> Masculino<br>
        <input type="radio" name="genero" value="Femenino"> Femenino<br>
        <input type="radio" name="genero" value="Otro"> Otro<br><br>

        <!-- CHECKBOX -->
        <p><strong>Intereses:</strong></p>
        <input type="checkbox" name="intereses[]" value="Deportes"> Deportes<br>
        <input type="checkbox" name="intereses[]" value="Música"> Música<br>
        <input type="checkbox" name="intereses[]" value="Tecnología"> Tecnología<br><br>

        <!-- SELECT -->
        <p><strong>Selecciona tu ciudad:</strong></p>
        <select name="ciudad" id="ciudad">
            <option value="">-- Selecciona una opción --</option>
            <option value="Rioverde">Rioverde</option>
            <option value="San Luis">San Luis</option>
            <option value="Matehuala">Matehuala</option>
        </select><br><br>

        <button type="submit">Enviar</button>

    </form>
</div>

</body>
</html>
