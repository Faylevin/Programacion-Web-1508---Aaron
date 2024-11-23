-- aqui viene proyecto
DROP SCHEMA IF EXISTS anima;
CREATE SCHEMA  IF NOT EXISTS anima DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE anima;

CREATE TABLE `animales`(
	numero_mascota varchar (10) not null,
	nombre_mascota text not null,
    especie text not null,
    raza text not null,
    edad int (10) not null,
    sexo text not null,
    peso varchar (50) not null,
    password varchar (10) not null
);

SELECT * FROM animales;
INSERT INTO animales (numero_mascota, nombre_mascota, especie, raza, edad, sexo, peso, password)
VALUES 
('A1', 'Rex', 'Perro', 'Pastor Alemán', 5, 'Macho', '30kg', 'A1'),
('A2', 'Luna', 'Gato', 'Siames', 3, 'Hembra', '4kg', 'A2'),
('A3', 'Toby', 'Conejo', 'Enano', 2, 'Macho', '1.5kg', 'A3');

DROP TABLE animales;


