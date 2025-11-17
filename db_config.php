<?php
// Configuración de la base de datos
$servidor   = "localhost";
$usuario    = "root";          // Cambia si usas otro usuario
$clave      = "";              // Cambia si tu usuario tiene contraseña
$base_datos = "contacto_db";   // Asegúrate de que este sea el nombre de tu BD

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Establecer el charset correcto
$conexion->set_charset("utf8mb4");
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar formulario de contacto</title>
    <link rel="stylesheet" href="styles.css">