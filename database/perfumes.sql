CREATE DATABASE IF NOT EXISTS perfumes;

USE perfumes;

CREATE TABLE clientes 
( 
    id INT PRIMARY key AUTO_INCREMENT,
    nombre varchar (25) not null,
    documento varchar(13) not null,
    correo varchar(40) not null,
    direccion varchar(25),
    telefono varchar(15)
   
) Engine=InnoDB default charset=latin1; 