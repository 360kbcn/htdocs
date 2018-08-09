<?php
  require "vendor/autoload.php";
  require "bdcole.php";

  $configuration = [
      'settings' => [
          'displayErrorDetails' => true,
      ],
  ];
  $c = new \Slim\Container($configuration);

  $app = new Slim\App($c);

  $c = $app->getContainer();

  $c['bd']= function(){
    $pdo = new PDO("mysql:host=localhost;dbname=cole", "root");
    return $pdo;
  };

  $c['view'] = function(){
    return new  \Slim\Views\PhpRenderer('view');
  };

  $app->get("/", "Bdcole:home");
  $app->get("/alumnos", "\Bdcole:listaAlumnos");
  $app->get("/dat/{id}", "\Bdcole:datoAlumno");
  $app->get("/newAlumno", "Bdcole:new")

 $app->run();

 ?>
