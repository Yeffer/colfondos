-- CREACION DE LA BASE DE DATOS
CREATE DATABASE `colfondos` /*!40100 COLLATE 'utf8_spanish_ci' */;

-- CREACION DE LA TABLA DE CLIENTES

CREATE TABLE clientes (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,    
    nombre VARCHAR(100)  NOT NULL,
    telefono VARCHAR(150) NOT NULL,
    fch_creacion TIMESTAMP NULL
);