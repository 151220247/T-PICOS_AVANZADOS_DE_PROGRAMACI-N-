<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 8</title>
</head>
<body>

<h2>Simulación de tareas concurrentes</h2>

<button onclick="ejecutarSinControl()">Ejecutar SIN control</button>
<button onclick="ejecutarConControl()">Ejecutar CON control</button>

<div id="resultado"></div>

<script>
function ejecutarSinControl(){
    document.getElementById("resultado").innerHTML = "Ejecutando...";

    Promise.all([
        fetch("tarea1.php"),
        fetch("tarea2.php")
    ])
    .then(res => Promise.all(res.map(r => r.text())))
    .then(data => {
        document.getElementById("resultado").innerHTML = data.join("<br>");
    });
}

function ejecutarConControl(){
    document.getElementById("resultado").innerHTML = "Ejecutando con control...";

    Promise.all([
        fetch("tarea1.php?control=1"),
        fetch("tarea2.php?control=1")
    ])
    .then(res => Promise.all(res.map(r => r.text())))
    .then(data => {
        document.getElementById("resultado").innerHTML = data.join("<br>");
    });
}
</script>

</body>
</html>