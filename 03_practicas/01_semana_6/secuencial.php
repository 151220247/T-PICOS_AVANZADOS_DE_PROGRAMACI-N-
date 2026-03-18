<?php

$inicioTiempo = microtime(true);

sleep(3);
sleep(3);

$finTiempo = microtime(true);
$total = $finTiempo - $inicioTiempo;

echo "Proceso secuencial terminado en " . round($total, 2) . " segundos";

?>