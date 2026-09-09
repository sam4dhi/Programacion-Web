-- IP: 127.0.0.1
-- PUERTO 3306
-- USER: root
-- PASS : 1234

-- Crear base de datos
CREATE DATABASE crud_app;

-- Seleccionar la base de datos
USE crud_app;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);