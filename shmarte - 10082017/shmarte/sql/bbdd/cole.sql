create database cole;

use cole;

create table asignatura(
  id integer primary key auto_increment,
  nombre varchar(30) not null
);

create table alumno(
  id integer primary key auto_increment,
  nombre varchar(30) not null,
  mail varchar(50) unique
);

create table alum_asig(
  alum integer,
  asig integer,
  nota float,
  primary key (alum, asig),
  foreign key (alum) references alumno(id),
  foreign key (asig) references asignatura(id)
);

insert into alumno(nombre, mail) values
  ('pepe', 'pepe@xxx.com'),
  ('rodolfo', 'rodolfo@gddg.com');

insert into asignatura(nombre) values
  ('mates'),
  ('dibujo'),
  ('programación');

insert into alum_asig(alum, asig, nota) values
  (1,1,8),
  (1,3,7),
  (2,3,9);
