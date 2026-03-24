<?php
file_put_contents("estado_tarea2.txt", "ejecutando");

file_put_contents("log.txt", date("Y-m-d H:i:s") . " - Tarea 2 iniciada\n", FILE_APPEND);

for($i=1; $i<=5; $i++){
    sleep(1);
    file_put_contents("log.txt", date("Y-m-d H:i:s") . " - Tarea 2 progreso $i\n", FILE_APPEND);
}

file_put_contents("estado_tarea2.txt", "detenida");

file_put_contents("log.txt", date("Y-m-d H:i:s") . " - Tarea 2 finalizada\n", FILE_APPEND);

echo "Tarea 2 ejecutada";
?>