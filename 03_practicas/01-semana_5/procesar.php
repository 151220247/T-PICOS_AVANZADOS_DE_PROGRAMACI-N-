<?php
require_once "config/Conexion.php";
require_once "libreria/EmpleadoHelper.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $edad = $_POST["edad"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $puesto = $_POST["puesto"];

    $helper = new EmpleadoHelper();

    if (!$helper->validarNombre($nombre)) {
        die("Nombre inválido");
    }

    if (!$helper->validarCorreo($correo)) {
        die("Correo inválido");
    }

    if (!$helper->validarEdad($edad)) {
        die("Edad inválida");
    }

    try{
        $conexion = Conexion::conectar();

                $sql = "INSERT INTO empleados (nombre, correo, edad, fecha_ingreso, puesto)
                VALUES (:nombre, :correo, :edad, :fecha_ingreso, :puesto)";

        $stmt =$conexion->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":correo", $correo);
        $stmt->bindParam(":edad", $edad);
        $stmt->bindParam(":fecha_ingreso", $fecha_ingreso);
        $stmt->bindParam(":puesto", $puesto);

        $stmt->execute();

        header("Location: Listar.php");
        exit();


    } catch (Exception $e) {
        die("Eror al guardar empleado");
    }

}
?>?