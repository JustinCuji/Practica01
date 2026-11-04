-- Creación de la base de datos
CREATE DATABASE IF NOT EXISTS practica_web DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE practica_web;

-- Creación de la tabla mensajes
CREATE TABLE IF NOT EXISTS mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    asunto VARCHAR(150) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;