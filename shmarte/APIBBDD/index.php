<?php
 require "vendor/autoload.php";
 require "bbddCole.php";

 $configuration = [
     'settings' => [
         'displayErrorDetails' => true,
     ],
 ];
 $c = new \Slim\Container($configuration);
  // crear aplicacion Slim
  $app = new Slim\App($c);

  // injectar dependencias
  $c = $app->getContainer();
  $c['bd'] = function(){
    $pdo = new PDO("mysql:host=localhost;dbname=cole", "root");
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  };

  //Definir rutas url

  $app->get("/alumnos", "\BbBdCole:getAlumnos");

  // arrancar

  $app->run();

 ?>
