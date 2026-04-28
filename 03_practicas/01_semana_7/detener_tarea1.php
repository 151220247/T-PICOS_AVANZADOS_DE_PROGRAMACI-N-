<?php
require_once "conexion.php";

file_put_contents("estado_tarea1.txt", "detenida");

file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 detenida\n", FILE_APPEND);

$con = Conexion::conectar();
$con->exec("INSERT INTO eventos (fecha, tarea, mensaje) VALUES (NOW(),'Tarea 1','detenida')");