<?php
file_put_contents("estado_tarea1.txt", "detenida");

file_put_contents("log.txt", date("Y-m-d H:i:s") . " - Tarea 1 detenida manualmente\n", FILE_APPEND);

echo "Tarea 1 detenida";
?>