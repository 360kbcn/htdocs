<?php
  require "vendor/autoload.php";
  require "bdcole.php";

  $app = new Slim\App();

  $c = $app->getContainer();
  $c['bd'] = function(){
    $pdo = new PDO("mysql:host=localhost;dbname=cole", "root");
    return $pdo;
  };

  $c['view'] = function(){
    return new \Slim\Views\PhpRenderer('view');
  };

  $app->get("/", "BDcole:home");
  $app->get("/alumnos", "\BDcole:listaAlumnos");
  $app->get("/alumnos/{id}", "\BDcole:infoAlumno");

  $app->run();
?>
