<!DOCTYPE html>
<html>
<head>
    <title>Semana 6 - Concurrencia</title>
</head>
<body>

<h2>Simulación: Secuencial vs Paralelo</h2>

<h3>Modo Secuencial</h3>
<a href="secuencial.php" target="_blank">
    <button>Ejecutar Secuencial</button>
</a>

<h3>Modo Paralelo</h3>
<button onclick="lanzarTareas()">Ejecutar en Paralelo</button>

<div id="salida"></div>

<script>

function lanzarTareas(){

    document.getElementById("salida").innerHTML = "Ejecutando tareas...";

    // Ejecutar ambas tareas al mismo tiempo
    Promise.all([
        fetch("tarea1.php").then(res => res.text()),
        fetch("tarea2.php").then(res => res.text())
    ])
    .then(respuestas => {

        document.getElementById("salida").innerHTML = 
            respuestas[0] + "<br>" + respuestas[1];
    })
    .catch(error => {
        document.getElementById("salida").innerHTML = "Error al ejecutar tareas";
    });

}

</script>

</body>
</html>