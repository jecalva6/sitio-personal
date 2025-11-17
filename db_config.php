<?php
$servidor   = "sql100.infinityfree.com";
$usuario    = "if0_40441507";
$clave      = "GtsJGVmHHm";
$base_datos = "if0_40441507_contacto_db";

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>
