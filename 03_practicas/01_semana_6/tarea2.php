<?php

$inicio = microtime(true);

sleep(3);

$fin = microtime(true);
$duracion = $fin - $inicio;

echo "Tarea 2 finalizada en " . round($duracion, 2) . " segundos";

?>