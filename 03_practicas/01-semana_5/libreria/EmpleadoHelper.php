<?php
class EmpleadoHelper {

 public function validarNombre($nombre) {
     return !empty($nombre) && strlen($nombre) >= 3;
 }

 public function validarCorreo($correo) {
     return filter_var($correo, FILTER_VALIDATE_EMAIL);
 }

 public function validarEdad($edad) {
     return is_numeric($edad) && $edad > 17;
 }

}
