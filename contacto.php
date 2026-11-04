<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Downhill Extreme</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="header">
        <h1>Downhill Extreme</h1>
        <p>Ponte en contacto con nuestro equipo</p>
        <nav class="nav">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="galeria.html">Galería</a></li>
                <li><a href="contacto.php" class="active">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main class="contenedor principal">
        <h2>Formulario de Contacto</h2>
        <p>¿Tienes dudas sobre las clínicas o deseas unirte a nuestras rutas? Envíanos un mensaje y te responderemos pronto.</p>
        
        <!-- Formulario que envía los datos mediante POST hacia guardar.php -->
        <form action="guardar.php" method="POST" class="formulario-contacto">
            <fieldset>
                <legend>Información de Contacto</legend>

                <div class="grupo-campo">
                    <label for="nombre">Nombre Completo (máx. 100 caracteres):</label>
                    <input type="text" id="nombre" name="nombre" maxlength="100" required placeholder="Ingresa tu nombre completo">
                </div>

                <div class="grupo-campo">
                    <label for="correo">Correo Electrónico (máx. 150 caracteres):</label>
                    <input type="email" id="correo" name="correo" maxlength="150" required placeholder="ejemplo@correo.com">
                </div>

                <div class="grupo-campo">
                    <label for="asunto">Asunto (máx. 150 caracteres):</label>
                    <input type="text" id="asunto" name="asunto" maxlength="150" required placeholder="Motivo de tu mensaje">
                </div>

                <div class="grupo-campo">
                    <label for="mensaje">Mensaje (máx. 2000 caracteres):</label>
                    <textarea id="mensaje" name="mensaje" maxlength="2000" rows="5" required placeholder="Escribe tu mensaje aquí..."></textarea>
                </div>

                <button type="submit" class="btn-enviar">Enviar Mensaje</button>
            </fieldset>
        </form>

        <div style="margin-top: 20px; text-align: center;">
            <a href="mensajes.php" class="btn-enviar" style="background-color: #333; text-decoration: none; display: inline-block;">Ver Mensajes Guardados</a>
        </div>
    </main>

    <footer class="footer">
        <p>Autor: Justin Cuji | Contacto: <a href="mailto:jcuji@est.ups.edu.ec">jcuji@est.ups.edu.ec</a> | &copy; 2026 Todos los derechos reservados.</p>
    </footer>
</body>
</html>