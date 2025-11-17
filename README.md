# 📘 Mi Sitio Académico UTPL – Jhonatan Eduardo Calva Mendoza

Este proyecto corresponde a un sitio web académico desarrollado como parte de la materia DESARROLLO WEB.  
Incluye una página de presentación personal y un formulario de contacto totalmente funcional, con validación en el cliente (HTML5) y en el servidor (PHP), y almacenamiento de mensajes en una base de datos MySQL.

---

## 📌 Descripción del proyecto

El sitio está compuesto por dos secciones principales:

- **Página de inicio (`index.php`)**  
  Presenta mi biografía, formación, experiencia laboral e intereses personales.

- **Página de contacto (`contacto.php`)**  
  Incluye un formulario que permite a cualquier usuario enviarme un mensaje.  
  La información enviada se valida en el navegador y nuevamente en el servidor antes de guardarse en una base de datos MySQL.

Una vez que el formulario es enviado, el usuario recibe un mensaje de confirmación.

---

## 📁 Archivos principales de la rama

Estos son los archivos que componen el funcionamiento central de mi proyecto:

| Archivo | Descripción |
|---------|-------------|
| **`index.php`** | Página principal que muestra mi biografía, fotografía, hobbies e información general. |
| **`contacto.php`** | Página que contiene el formulario de contacto con validación HTML5. <br> Incluye: <br> • Validación en el cliente mediante `required`, `type="email"`, `minlength`, `maxlength`. <br> • Envío de los datos mediante `POST` hacia `procesar_formulario.php`. |
| **`procesar_formulario.php`** | Recibe los datos del formulario, realiza validación en el servidor e inserta la información en la base de datos. <br> Muestra un mensaje de **confirmación** o **error** según el resultado del envío. |
| **`db_config.php`** | Contiene la configuración y creación de la conexión a la base de datos MySQL utilizando `mysqli`. |
| **`styles.css`** | Define toda la apariencia visual del sitio (colores azul marino y celeste, tarjetas, tipografías, botones, disposición responsive). |
| **`mi-foto.jpg`** | Imagen utilizada en la página principal como fotografía del perfil. |


---

## 🗄️ Base de datos `contacto_db`

El proyecto utiliza una base de datos MySQL llamada **`contacto_db`**, donde se almacena la información enviada desde el formulario de contacto.

### 📂 Tabla principal: `mensajes`

La tabla **`mensajes`** registra cada mensaje enviado por los usuarios externos a través del formulario.  
Su estructura es la siguiente:

- `id` – Identificador numérico del mensaje (clave primaria, AUTO_INCREMENT).
- `nombre` – Nombre completo de la persona que envía el mensaje (`VARCHAR(100)`).
- `correo` – Correo electrónico del remitente (`VARCHAR(150)`).
- `mensaje` – Contenido del mensaje (`TEXT`).
- `fecha_envio` – Fecha y hora en que el mensaje fue enviado (`DATETIME`).
  
---
## 🧩 Tecnologías utilizadas

- **HTML5** – estructura del sitio.
- **CSS3** – diseño responsivo y estilo con paleta en azul marino.
- **PHP** – lógica del formulario y conexión a base de datos.
- **MySQL** – almacenamiento de los mensajes de contacto.
- **XAMPP** – entorno local de desarrollo (Apache + PHP + MySQL).

---

## 🧩 ¿Cómo puede un usuario usar la página?

Un visitante o cliente puede navegar y usar el sitio de la siguiente manera:

### 1️⃣ Acceder a la página principal
El usuario debe ingresar al enlace público del sitio web (ver sección final de este documento).  
Allí encontrará:

- Fotografía del autor  
- Biografía  
- Hobbies e intereses  
- Menú de navegación de Inicio y Contacto

### 2️⃣ Abrir la página de contacto
En el menú superior, debe seleccionar la opción:

> **Contacto**

Esto lo lleva al formulario donde podrá enviar un mensaje.

### 3️⃣ Rellenar el formulario
El formulario contiene tres campos obligatorios:

- **Nombre completo**  
- **Correo electrónico**  
- **Mensaje**

Antes de enviar, el navegador valida automáticamente:

- Que los campos estén completos  
- Que el correo tenga formato válido  
- Que se respeten los mínimos (3) y máximos(1000) de caracteres  

### 4️⃣ Enviar el mensaje
Al hacer clic en **Enviar mensaje**, el sistema:

1. Valida nuevamente en el servidor que la información sea correcta.  
2. Guarda el mensaje en la base de datos MySQL.  
3. Muestra una pantalla de confirmación indicando que el mensaje fue enviado exitosamente.  

El usuario podrá regresar al inicio o enviar otro mensaje si lo desea.

---

## 🌐 Enlace al hosting  InfinityFree – Sitio publicado

Este enlace dirige directamente a la página principal (inicio) del sitio académico.

👉 **Sitio publicado:**  
https://sitiopersonalacademico.infinityfreeapp.com/
