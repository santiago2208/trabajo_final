CREATE DATABASE IF NOT EXISTS perfumes;

USE perfumes;

CREATE TABLE clientes 
( 
    id INT PRIMARY key AUTO_INCREMENT,
    nombre varchar (25) not null,
    documento varchar(13) not null,
    correo varchar(40) not null,
    direccion varchar(25) not null,
    telefono varchar(15) not null
   
) Engine=InnoDB default charset=latin1; 

CREATE TABLE productos
(
    id INT primary key AUTO_INCREMENT,
    referencia varchar (60) not null,
    cantidad INT (12) not null,
    valor double not null,
    nombre varchar (25) not null

    
) Engine=InnoDB default charset=latin1; 

CREATE TABLE proveedores
(
    id INT primary key AUTO_INCREMENT,
    nombre_p varchar (30) not null,
    direccion_p varchar (25) not null,
    telefono_p varchar (15) not null,
    nit_p varchar (16) not null,
    correo_p varchar (40) not null,
    producto_p varchar (30) not null,
    descripcion_p varchar (200) 
    
) Engine=InnoDB default charset=latin1; 

