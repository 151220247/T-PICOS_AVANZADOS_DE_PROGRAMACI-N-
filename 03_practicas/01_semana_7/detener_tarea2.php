<?php
require_once "conexion.php";

file_put_contents("estado_tarea2.txt", "detenida");

file_put_contents("log.txt", date("H:i:s") . " - Tarea 2 detenida\n", FILE_APPEND);

$con = Conexion::conectar();
$con->exec("INSERT INTO eventos (fecha, tarea, mensaje) VALUES (NOW(),'Tarea 2','detenida')");