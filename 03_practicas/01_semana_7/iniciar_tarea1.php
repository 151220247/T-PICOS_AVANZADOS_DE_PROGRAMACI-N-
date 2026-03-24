<?php
file_put_contents("estado_tarea1.txt", "ejecutando");

file_put_contents("log.txt", date("Y-m-d H:i:s") . " - Tarea 1 iniciada\n", FILE_APPEND);

for($i=1; $i<=5; $i++){
    sleep(1);
    file_put_contents("log.txt", date("Y-m-d H:i:s") . " - Tarea 1 progreso $i\n", FILE_APPEND);
}

file_put_contents("estado_tarea1.txt", "detenida");

file_put_contents("log.txt", date("Y-m-d H:i:s") . " - Tarea 1 finalizada\n", FILE_APPEND);

echo "Tarea 1 ejecutada";
?>