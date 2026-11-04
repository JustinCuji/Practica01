<?php
require_once 'conexion.php';

$sql = "SELECT nombre, correo, asunto, mensaje, fecha_registro FROM mensajes ORDER BY fecha_registro DESC";
$resultado = $conn->query($sql);
?>
<!DOCTYPE html 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes Registrados - Downhill Extreme</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="header">
        <h1>Downhill Extreme</h1>
        <p>Consulta de mensajes almacenados en la base de datos</p>
        <nav class="nav">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="galeria.html">Galería</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main class="contenedor principal">
        <h2>Listado de Mensajes</h2>
        
        <?php if ($resultado && $resultado->num_rows > 0): ?>
            <table class="tabla-datos">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Asunto</th>
                        <th>Mensaje</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['nombre']) ?></td>
                            <td><?= htmlspecialchars($row['correo']) ?></td>
                            <td><?= htmlspecialchars($row['asunto']) ?></td>
                            <td><?= htmlspecialchars($row['mensaje']) ?></td>
                            <td><?= htmlspecialchars($row['fecha_registro']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <!-- Si no existen registros, informa esta situación (requisito de la práctica)[cite: 12] -->
            <p style="text-align: center; padding: 20px; font-weight: bold; color: #666;">No existen registros almacenados en este momento.</p>
        <?php endif; ?>

        <div style="margin-top: 20px; text-align: center;">
            <a href="contacto.php" class="btn-enviar" style="text-decoration: none; display: inline-block;">Regresar al Formulario</a>
        </div>
    </main>

    <footer class="footer">
        <p>Autor: Justin Cuji | Contacto: <a href="mailto:jcuji@est.ups.edu.ec">jcuji@est.ups.edu.ec</a> | &copy; 2026 Todos los derechos reservados.</p>
    </footer>
</body>
</html>