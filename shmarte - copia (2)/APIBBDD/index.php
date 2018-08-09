<?php
 require "vendor/autoload.php";
 require "bbddCole.php";

  // crear aplicacion Slim
  $app = new Slim\App();

  // injectar dependencias
  $c = $app->getContainer();
  $c['bd'] = function(){
    $pdo = new PDO("mysql:host=localhost;dbname=cole", "root");
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  };

  //Definir rutas url

  $app->get("/alumnos", "\bbddCole:getAlumnos");

  // arrancar

  $app->run();

 ?>
