<?php

$inicio = microtime(true);

sleep(3);
sleep(3);

$fin = microtime(true);
$tiempoTotal = $fin - $inicio;
echo"Ejecucion secuencial completada en" .round($tiempoTotal, 2). "segundos";
?>