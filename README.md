# Mi sitio académico UTPL – Jhonatan Eduardo Calva Mendoza

Sitio web académico desarrollado como parte de las actividades de la carrera de Tecnologías de la Información (UTPL).  
Incluye una página de presentación personal y un formulario de contacto funcional con validación tanto en el cliente (HTML5) como en el servidor (PHP), almacenando los mensajes en una base de datos MySQL.

---

## 🧩 Tecnologías utilizadas

- **HTML5** – estructura del sitio.
- **CSS3** – diseño responsivo y estilo con paleta en azul marino.
- **PHP** – lógica del formulario y conexión a base de datos.
- **MySQL** – almacenamiento de los mensajes de contacto.
- **XAMPP** (o similar) – entorno local de desarrollo (Apache + PHP + MySQL).

---

## 📁 Estructura principal del proyecto

- `index.php`  
  Página principal del sitio académico. Contiene la biografía, información personal y sección de hobbies/intereses.

- `contacto.php`  
  Página con el **formulario de contacto**.  
  Incluye:
  - Validación básica en el cliente mediante atributos HTML5 (`required`, `type="email"`, `minlength`, `maxlength`).
  - Envío de los datos mediante `POST` a `procesar_formulario.php`.

- `procesar_formulario.php`  
  Script PHP que:
  - Valida nuevamente los datos en el servidor (campos vacíos y formato de correo).
  - Inserta el mensaje en la tabla `mensajes` de la base de datos.
  - Muestra un **mensaje de confirmación** o error al usuario.

- `db_config.php`  
  Archivo de configuración de la base de datos. Crea la conexión MySQL mediante `mysqli`.

- `styles.css`  
  Hoja de estilos global que define el diseño del header, tarjetas, formulario, botones y mensajes de alerta.

---

## 🗄️ Base de datos

Base de datos: **`contacto_db`**  
Tabla utilizada: **`mensajes`**

Estructura de la tabla:

```sql
CREATE TABLE mensajes (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_envio DATETIME NOT NULL
);
