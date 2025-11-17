<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Mi sitio académico UTPL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h2>Formulario de contacto</h2>
            <p>Completa el siguiente formulario para enviarme un mensaje.</p>

            <!-- SIN "novalidate" para que funcione la validación HTML5 -->
            <form action="procesar_formulario.php" method="POST">
                <div>
                    <label for="nombre">Nombre completo</label>
                    <input 
                        type="text" 
                        id="nombre" 
                        name="nombre" 
                        required 
                        minlength="3" 
                        maxlength="100"
                        placeholder="Escribe tu nombre completo">
                </div>

                <div>
                    <label for="correo">Correo electrónico</label>
                    <input 
                        type="email" 
                        id="correo" 
                        name="correo" 
                        required 
                        maxlength="150"
                        placeholder="ejemplo@correo.com">
                </div>

                <div>
                    <label for="mensaje">Mensaje</label>
                    <textarea 
                        id="mensaje" 
                        name="mensaje" 
                        required 
                        minlength="5" 
                        maxlength="1000"
                        placeholder="Escribe tu mensaje aquí..."></textarea>
                </div>

                <button type="submit">Enviar mensaje</button>
            </form>
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