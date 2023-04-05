drop database fundacion;
create database fundacion;

use fundacion;

create table empresas(

	id int auto_increment,
    nombre varchar(20),
    contacto varchar(40),
    email varchar(50),
    telefono char(9),
    direccion varchar(50),
    
    primary key(id)

);

create table alumnos(
	
	id int auto_increment,
    nombre varchar(20),
    apellido varchar(20),
    dni char(9) unique,
    tipo_jornada varchar(15),
    horario varchar(15),
    fk_id_empresa int,
    primary key(id),
    
    foreign key(fk_id_empresa) references empresas(id)
);

#drop table empresas;
#drop table alumnos;
select * from empresas;
select * from alumnos;

select empresas.nombre, alumnos.nombre
from empresas
inner join alumnos
on empresas.id = alumnos.fk_id_empresa;




