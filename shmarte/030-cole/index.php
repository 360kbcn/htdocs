<?php
  require "vendor/autoload.php";
  require "bdcole.php";

  //crear aplicación Slim
  $app = new Slim\App();

  //injectar dependencias
  $c = $app->getContainer();
  $c['bd'] = function(){
    $pdo = new PDO("mysql:host=localhost;dbname=cole", "root");
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  };

  //Definir URLs
  $app->get("/alumnos", "\BdCole:getAlumnos");

  //Lanzar aplicación
  $app->run();
?>
