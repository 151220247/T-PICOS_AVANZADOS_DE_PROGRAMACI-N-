PROYECTO: Sistema de Gestión de Empleados
Autor: (Josue Elias Ramirez Juarez)
Materia: Topicos Avanzados De Programacion

-------------------------------------------------------

DESCRIPCIÓN GENERAL

Este proyecto consiste en un mini sistema de gestión de empleados,
desarrollado en PHP utilizando Programación Orientada a Objetos (POO) y conexión a base de datos mediante PDO.

El sistema permite:
- Registrar empleados
- Validar datos mediante una librería personalizada
- Guardar información en base de datos
- Mostrar empleados en una tabla dinámica
- Calcular estadísticas (total, promedio edad, mayor antigüedad)

-------------------------------------------------------

LIBRERÍA PERSONALIZADA: EmpleadoHelper

Se creó una clase llamada "EmpleadoHelper" ubicada en la carpeta /libreria/.

Esta clase contiene métodos reutilizables para validar datos antes de ser almacenados en la base de datos.

Métodos implementados:

1. validarNombre($nombre)
   Verifica que el nombre no esté vacío y tenga al menos 3 caracteres.

2. validarCorreo($correo)
   Verifica que el correo tenga formato válido utilizando filter_var().

3. validarEdad($edad)
   Verifica que la edad sea numérica y mayor de 17 años.

La ventaja de esta librería es que separa la lógica de validación del archivo principal (procesar.php),
permitiendo reutilización y mejor organización del código.

-------------------------------------------------------

CLASE DE CONEXIÓN: Conexion

Se creó una clase llamada "Conexion" ubicada en la carpeta /config/.

Esta clase contiene un método estático:

- conectar()

El método utiliza PDO para establecer conexión segura con la base de datos MySQL.

Se implementó manejo de excepciones para capturar errores de conexión.

-------------------------------------------------------

ARQUITECTURA DEL PROYECTO

- index.php → Vista (Formulario)
- procesar.php → Lógica de negocio
- listar.php → Visualización y estadísticas
- EmpleadoHelper.php → Validaciones reutilizables
- Conexion.php → Conexión a base de datos

-------------------------------------------------------

CONCLUSIÓN

El proyecto aplica los conceptos de Programación Orientada a Objetos, separación de responsabilidades,
reutilización de código y uso seguro de bases de datos mediante PDO.