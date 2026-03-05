<!DOCTYPE html>
<html>
<head>
    <title>Semana 6 - Concurrencia</title>
</head>
<body>
    <h2>Simulacion Flujo Unico vs Flujo Multiple</h2>
    <h3>Flujo Unico (Secuencial)</h3>
    <a href="secuencial.php" target="_blank">
        <button>Ejecutar Secuencial</button>
    </a>
    <h3>Flujo Multiple (Simulacion)</h3>
    <button onclick="ejecutarParalelo()">Ejecutar en Paralelo</button>
    <div id="resultado"></div>
    <script>
        function ejecutarPralelo(){
            documento.getElementByid("resultado").innerHTML = "Ejecutando...";
            fetch("tarea1.php");
            fetch("tarea2.php");
            document.getElementByid("resultado").innerHTML=
            "Tares enviadas en paralelo (revisar pestaña Network)";

        }
</script>        
</body>
</html>