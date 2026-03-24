<?php
$control = isset($_GET['control']);

$archivo = "saldo.txt";
$log = "log.txt";

if($control){
    $fp = fopen($archivo, "r+");
    flock($fp, LOCK_EX);

    $saldo = intval(fgets($fp));

    file_put_contents($log, "Tarea2 lee: $saldo\n", FILE_APPEND);

    sleep(3);

    $nuevoSaldo = $saldo - 500;

    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, $nuevoSaldo);

    flock($fp, LOCK_UN);
    fclose($fp);
} else {
    $saldo = intval(file_get_contents($archivo));

    file_put_contents($log, "Tarea2 lee: $saldo\n", FILE_APPEND);

    sleep(3);

    $nuevoSaldo = $saldo - 500;

    file_put_contents($archivo, $nuevoSaldo);
}

echo "Tarea 2 terminó. Nuevo saldo: $nuevoSaldo";
?>