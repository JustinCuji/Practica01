<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre  = trim($_POST['nombre'] ?? '');
    $correo  = trim($_POST['correo'] ?? '');
    $asunto  = trim($_POST['asunto'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    $errores = [];

    // Validar campos vacíos o solo espacios
    if (empty($nombre))  { $errores[] = "El nombre es obligatorio."; }
    if (empty($correo))  { $errores[] = "El correo es obligatorio."; }
    if (empty($asunto))  { $errores[] = "El asunto es obligatorio."; }
    if (empty($mensaje)) { $errores[] = "El mensaje es obligatorio."; }

    // Validar longitudes máximas
    if (mb_strlen($nombre) > 100)  { $errores[] = "El nombre supera los 100 caracteres."; }
    if (mb_strlen($correo) > 150)  { $errores[] = "El correo supera los 150 caracteres."; }
    if (mb_strlen($asunto) > 150)  { $errores[] = "El asunto supera los 150 caracteres."; }
    if (mb_strlen($mensaje) > 2000){ $errores[] = "El mensaje supera los 2000 caracteres."; }

    // Validar formato de correo[cite: 12]
    if (!empty($correo) && !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo electrónico no es válido.";
    }

    if (!empty($errores)) {
        echo "<div style='color:red; font-family:sans-serif; padding:20px;'><h3>Errores de validación en el servidor:</h3><ul>";
        foreach ($errores as $err) {
            echo "<li>" . htmlspecialchars($err) . "</li>";
        }
        echo "</ul><br><a href='contacto.php'>Volver al formulario</a></div>";
        exit;
    }

    // Almacenamiento seguro mediante consultas preparadas con MySQLi[cite: 12]
    $stmt = $conn->prepare("INSERT INTO mensajes (nombre, correo, asunto, mensaje) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $correo, $asunto, $mensaje);

    if ($stmt->execute()) {
        echo "<div style='color:green; font-family:sans-serif; padding:20px;'><h3>¡Mensaje guardado con éxito!</h3><p>Los datos se almacenaron correctamente en la base de datos.</p><br><a href='contacto.php'>Enviar otro mensaje</a> | <a href='mensajes.php'>Ver mensajes registrados</a></div>";
    } else {
        echo "Error al almacenar el mensaje: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>