-- Crear base de datos
CREATE DATABASE crud_app;

--Sleeccionar la base de datos
USE crud_app;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

