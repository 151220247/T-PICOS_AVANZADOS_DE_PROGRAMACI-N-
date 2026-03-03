confing/
Conexion.php

<?php

class Conexion {
    public static function conectar(){
        $host = "localhost";
        $db = "empresa_db";
        $user = "root";
        $pass = "";

    try{
    $conexion = new PDO(
    "mysql:host=$host;dbname=$db;charset=utf8",
    $user,
    $pass
);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conexion;

    } catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

 }

    }
