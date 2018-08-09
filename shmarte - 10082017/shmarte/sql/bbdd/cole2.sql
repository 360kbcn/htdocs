create database cole;
  use cole;

  create table asignatura(
    id integer primary key auto_increment,
    nombre varchar(30) not null
  );

  create table alumno(
      id integer primary key auto_increment,
      nombre varchar(30) not null, mail varchar(50) unique
    );

  create table alum_asig(
    alum integer,
    asig integer,
    nota float,
    primary key (alum, asig),
    foreign key (alum) references alumno(id),
    foreign key (asig) references asignatura(id)

  );
