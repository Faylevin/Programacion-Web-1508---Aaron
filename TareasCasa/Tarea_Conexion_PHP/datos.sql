-- drop
DROP SCHEMA if exist 'fes_aragon';

-- crea la db
CREATE SCHEMA if not exist 'fes_aragon';

-- usa la base de datos
USE fes_aragon;

-- Crear otra tabla 
CREATE TABLE `alumnos`(
        Nombre_Usuario text not null,
        Numero_Cuenta int(10) not null,
        Carrera text not null,
        Domicilio text not null,
        Contacto_Movil varchar(15) not null,
        Correo_Electronico text not null,
        Permisos int(11) not null default '1',
        Password varchar(10) not null,
        Registro_Fecha datetime not null default current_timestamp,
        Primary key (Numero_Cuenta)
);

Drop table alumnos;

select * from fes_aragon.alumnos;