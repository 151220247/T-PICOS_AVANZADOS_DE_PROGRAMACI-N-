<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Tareas</title>
</head>
<body>

<h2>CONTROL DE TAREAS DEL SISTEMA</h2>

<h3>Tarea 1</h3>
<button onclick="fetch('iniciar_tarea1.php')">Iniciar</button>
<button onclick="fetch('detener_tarea1.php')">Detener</button>

<h3>Tarea 2</h3>
<button onclick="fetch('iniciar_tarea2.php')">Iniciar</button>
<button onclick="fetch('detener_tarea2.php')">Detener</button>

<br><br>
<button onclick="verLog()">Ver Log</button>

<pre id="log"></pre>

<script>
function verLog(){
    fetch("log.txt")
    .then(res => res.text())
    .then(data => {
        document.getElementById("log").textContent = data;
    });
}
</script>

</body>
</html>