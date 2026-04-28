<?php
require_once "conexion.php";

file_put_contents("estado_tarea1.txt", "ejecutando");

function logTxt($msg){
    file_put_contents("log.txt", date("H:i:s") . " - $msg\n", FILE_APPEND);
}

function logBD($tarea, $msg){
    $con = Conexion::conectar();
    $sql = "INSERT INTO eventos (fecha, tarea, mensaje) VALUES (NOW(), ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->execute([$tarea, $msg]);
}

logTxt("Tarea 1 iniciada");
logBD("Tarea 1", "iniciada");

for($i=1;$i<=5;$i++){
    sleep(1);
    logTxt("Tarea 1 progreso $i");
    logBD("Tarea 1", "progreso $i");
}

file_put_contents("estado_tarea1.txt", "finalizada");

logTxt("Tarea 1 finalizada");
logBD("Tarea 1", "finalizada");