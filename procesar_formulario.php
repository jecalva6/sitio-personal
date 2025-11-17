<?php

$mensaje_confirmacion = "";
$es_error = false;

// Solo aceptamos datos enviados por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 1. Recibir y limpiar los datos
    $nombre  = trim($_POST["nombre"]  ?? "");
    $correo  = trim($_POST["correo"]  ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    // 2. Validación básica en servidor
    if ($nombre === "" || $correo === "" || $mensaje === "") {
        $mensaje_confirmacion = "Todos los campos son obligatorios.";
        $es_error = true;
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $mensaje_confirmacion = "El correo electrónico no tiene un formato válido.";
        $es_error = true;
    }

    
    if (!$es_error) {
       
        require_once "db_config.php"; // aquí se crea $conexion

        
        $sql = "INSERT INTO mensajes (nombre, correo, mensaje, fecha_envio) 
                VALUES (?, ?, ?, NOW())";

        $stmt = $conexion->prepare($sql);

        if ($stmt === false) {
            $mensaje_confirmacion = "Error al preparar la consulta en la base de datos: " . $conexion->error;
            $es_error = true;
        } else {
            
            $stmt->bind_param("sss", $nombre, $correo, $mensaje);

            if ($stmt->execute()) {
                $mensaje_confirmacion = "Gracias, tu mensaje ha sido enviado correctamente.";
                $es_error = false;
            } else {
                $mensaje_confirmacion = "Hubo un error al enviar tu mensaje. Inténtalo nuevamente.";
                $es_error = true;
            }

            $stmt->close();
        }

        $conexion->close();
    }
} else {
    
    header("Location: contacto.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-inner">
            <div>
                <h1>Jhonatan Eduardo Calva Mendoza</h1>
                <p>Estudiante de Tecnologías de la Información · UTPL</p>
            </div>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="contacto.php" class="active">Contacto</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="card">
            <h2>Contacto</h2>

            <?php if ($es_error): ?>
                <div class="alert alert-error">
                    <p><?php echo htmlspecialchars($mensaje_confirmacion, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <p style="margin-top: 15px;">
                    <a href="contacto.php">Volver al formulario</a>
                </p>
            <?php else: ?>
                <div class="alert alert-success">
                    <p><?php echo htmlspecialchars($mensaje_confirmacion, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <p style="margin-top: 15px;">
                    <a href="index.php">Volver al inicio</a> · 
                    <a href="contacto.php">Enviar otro mensaje</a>
                </p>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Mi sitio académico UTPL. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar formulario de contacto</title>

    <link rel="stylesheet" href="styles.css">
