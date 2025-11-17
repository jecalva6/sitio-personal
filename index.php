<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sitio académico UTPL</title>
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
                <a href="index.php" class="active">Inicio</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
    </header>

    <main>

        
        <section class="card about">
            <h2 class="titulo-sitio">Mi sitio académico UTPL</h2>

            <div class="hero">
                <img src="mi-foto.jpg" alt="Fotografía de Jhonatan Eduardo Calva Mendoza" class="foto-perfil">

                <div class="hero-text">
                    <p>
                        Hola, mi nombre es <strong>Jhonatan Eduardo Calva Mendoza</strong>, nací el 17 de noviembre de 1998 en la ciudad de 
                        <strong>Catamayo</strong>, conocida como la <strong>"Ciudad del Eterno Sol"</strong>. Actualmente tengo 28 años y resido en Quito. Soy el hijo mayor dentro de una familia de tres hermanos, conformada por mis padres <strong>Juan Calva</strong> y <strong>Edith Mendoza</strong>, y mis hermanas <strong>Stefany</strong> y <strong>Karen</strong>, así como mi sobrina <strong>Paulet</strong>. 
                        Ellos han sido un pilar fundamental en mi desarrollo personal y profesional, enseñándome valores como la responsabilidad, el respeto y la disciplina, cualidades que han influido profundamente y de manera positiva en mi vida. 
                        Desde temprana edad he sentido interés por la tecnología, la disciplina y el aprendizaje continuo, elementos que han 
                        guiado mi desarrollo personal y profesional.
                    </p>

                    <p>
                        Soy <strong>militar en servicio activo</strong>, profesión en la que he servido durante más de <strong>7 años</strong> dentro de las Fuerzas Armadas del Ecuador. 
                        Esta trayectoria ha fortalecido en mí valores como la valentía, la responsabilidad, la disciplina, el compromiso y el trabajo en equipo 
                        , cualidades que aplico en cada ámbito de mi vida.
                    </p>

                    <p>
                        En el ámbito académico, soy estudiante de la carrera de <strong>Tecnologías de la Información</strong> en la Universidad Técnica Particular de Loja (UTPL), 
                        donde actualmente curso el <strong>quinto ciclo</strong>. Mi formación combina la experiencia militar con el enfoque tecnológico, y mi interés 
                        principal es comprender cómo las soluciones digitales pueden mejorar procesos y generar impacto positivo en la sociedad.
                    </p>
                </div>
            </div>
        </section>

        
        <section class="hobbies">
            <h2>Mis hobbies e intereses</h2>
            <ul>
                <li>Practicar natación en mis tiempos libres</li>
                <li>Pasear o salir a caminar con mi sobrina</li>
                <li>Jugar videojuegos de disparos y supervivencia</li>
                <li>Jugar fútbol y vóley cuando tengo oportunidad</li>
            </ul>
        </section>

    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Mi sitio académico UTPL. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
