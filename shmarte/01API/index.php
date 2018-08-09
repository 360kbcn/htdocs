<?php
require "vendor/autoload.php";
require "funciones.php";

$app = new Slim\App();

$app->get("/funciones/generos", "\Libros:generos");

$app->run();


// Pregunta como sacar esto de aqui.

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Como usar Mi Api</title>
  </head>
  <h1>Direccion Base</h1>
  <p>localhost/shmarte/01API</p>
  <body>
    <h2>Generos</h2>
    <p>GET /generos</p>
    <p>Devuelve una lista con los generos de los libros de la base de datos</p>
    <p><strong>Ejemplo</strong> localhost/shmarte/01API/generos</p>
    <br>
    <h2>Libros</h2>
    <p>GET /libros/{id_libro}</p>
    <p>Devuelve toda la informacion de un libro</p>
    <p><strong>Ejemplo</strong> localhost/shmarte/01API/libros/2</p>
    <br>
    <p>GET /libros</p>
    <p>Devuelve un listado. Se puede filtrar la lista de libros con los campos, todoos opcionales.</p>
    <p>genero: El genero del libro.</p>
    <p>campo : Devuelve unicamente el campo del pedido.</p>
    <p><strong>Ejemplo</strong> localhost/shmarte/01API/libros</p>
    <p><strong>Ejemplo</strong> localhost/shmarte/01API/libros?genero=novela</p>



  </body>
</html>
