# Downhill Extreme 

## 1. Descripción del proyecto

**Downhill Extreme** es un sitio web desarrollado como proyecto académico, enfocado en el deporte de ciclismo de montaña Downhill. Su objetivo es presentar información sobre este deporte, mostrar imágenes y contenido multimedia, dar a conocer servicios y permitir que los visitantes envíen mensajes mediante un formulario de contacto.

El proyecto integra tecnologías de desarrollo web para crear un sitio organizado, visualmente estructurado y con almacenamiento de información en una base de datos.

## 2. Tecnologías utilizadas

- **HTML:** estructura y organización del contenido de las páginas web.
- **CSS:** diseño, presentación, colores, distribución y adaptación de los elementos.
- **PHP:** procesamiento de formularios, validación de datos y comunicación con la base de datos.
- **MySQL:** almacenamiento y consulta de los mensajes registrados.
- **MySQLi:** conexión entre PHP y MySQL.
- **XAMPP:** entorno de servidor local para ejecutar Apache, PHP y MySQL.

## 3. Estructura del proyecto

```text
Practica01/
│
├── index.html
├── nosotros.html
├── servicios.html
├── galeria.html
├── contacto.php
├── guardar.php
├── mensajes.php
├── conexion.php
│
├── css/
│   └── estilos.css
│
└── img/
    ├── banner.jpg
    ├── item1.jpg
    ├── item2.jpg
    └── item3.jpg
```

## 4. Descripción de los archivos

| Archivo      | Función |
| `index.html` | Página principal del sitio web. |
| `nosotros.html` | Presenta información sobre el proyecto y el deporte Downhill. |
| `servicios.html` | Muestra los servicios y clínicas ofrecidos. |
| `galeria.html` | Contiene imágenes y contenido multimedia. |
| `contacto.php` | Presenta el formulario para enviar mensajes. |
| `guardar.php` | Recibe, valida y almacena los datos del formulario. |
| `conexion.php` | Establece la conexión con la base de datos MySQL. |
| `mensajes.php` | Consulta y muestra los mensajes registrados. |
| `css/estilos.css` | Contiene los estilos generales del sitio web. |
| `img/` | Almacena las imágenes utilizadas en las páginas. |

## 5. Características principales

- Navegación entre diferentes páginas.
- Diseño uniforme mediante una hoja de estilos CSS externa.
- Galería de imágenes y video de YouTube.
- Tabla informativa de servicios.
- Formulario de contacto.
- Validación de campos obligatorios.
- Validación de formato de correo electrónico.
- Control de longitudes máximas de los datos.
- Almacenamiento de mensajes en MySQL.
- Consulta de mensajes registrados.
- Uso de consultas preparadas para mejorar la seguridad de las operaciones con la base de datos.

## 6. Base de datos

El proyecto utiliza una base de datos MySQL llamada:

`practica_web`

Dentro de ella se encuentra la tabla:

`mensajes`

La tabla contiene los siguientes campos:

| Campo    | Tipo de dato | Descripción |

| `id`     | INT          | Identificador único y autoincremental. |
| `nombre` | VARCHAR(100) | Nombre del remitente. |
| `correo` | VARCHAR(150) | Correo electrónico. |
| `asunto` | VARCHAR(150) | Asunto del mensaje. |
| `mensaje`| TEXT         | Contenido del mensaje. |
| `fecha_registro` | DATETIME | Fecha y hora del registro. |

## 7. Instalación y ejecución

Para ejecutar el proyecto localmente se deben seguir estos pasos:

1. Instalar XAMPP.
2. Iniciar los servicios Apache y MySQL desde el panel de control de XAMPP.
3. Copiar la carpeta del proyecto dentro del directorio `htdocs`.
4. Abrir phpMyAdmin desde `http://localhost/phpmyadmin`.
5. Crear la base de datos `practica_web`.
6. Ejecutar el script SQL de creación de la tabla `mensajes`.
7. Verificar que los datos de conexión en `conexion.php` correspondan a la configuración de MySQL local.
8. Abrir el navegador e ingresar a:

```text
http://localhost/Practica01
```

**Nota:** Si la carpeta tiene otro nombre, se debe reemplazar `Downhill-Extreme` por el nombre correspondiente.

## 8. Funcionamiento del formulario

El formulario de contacto utiliza el método `POST` para enviar los datos al archivo `guardar.php`.

El proceso funciona de la siguiente manera:

1. El usuario ingresa sus datos en el formulario.
2. PHP recibe la información mediante `$_POST`.
3. Se validan los campos obligatorios y sus longitudes.
4. Se comprueba que el correo electrónico tenga un formato válido.
5. Si existen errores, se muestran los mensajes de validación y no se almacenan los datos.
6. Si los datos son correctos, se ejecuta una consulta preparada `INSERT INTO`.
7. Los datos se almacenan en la tabla `mensajes`.
8. El archivo `mensajes.php` permite consultar los registros guardados.

## 9. Seguridad y validaciones

Para mejorar la seguridad y confiabilidad del proyecto se implementaron:

- `trim()` para eliminar espacios innecesarios.
- `empty()` para comprobar campos vacíos.
- `mb_strlen()` para controlar la longitud de los datos.
- `filter_var()` con `FILTER_VALIDATE_EMAIL` para validar el formato del correo.
- `prepare()` y `bind_param()` para utilizar consultas preparadas y reducir el riesgo de inyección SQL.
- `htmlspecialchars()` para evitar que el contenido ingresado por los usuarios se interprete como código HTML al mostrarlo.

## 10. Autor

**Desarrollado por:** Justin Cuji

**Proyecto:** Pagina Web sobre Downhill 

Programación y Desarrollo Web

---

## 11. Conclusión

El proyecto Downhill permite aplicar los conocimientos adquiridos en desarrollo web mediante la integración de HTML, CSS, PHP y MySQL. Además, demuestra el funcionamiento de formularios, validaciones del lado del servidor, conexiones a bases de datos, almacenamiento y consultas de información.