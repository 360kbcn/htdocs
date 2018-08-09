<?php
require 'vendor/autoload.php';
require 'bdsakila.php'; // requerimos las clase definida bdsakila donde iran las consultas

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);

$Myapp = new Slim\App($c);

$variable1 = $Myapp->getContainer();
$variable1['bd'] = function(){
  $Mypdo = new PDO("mysql:host=localhost;dbname=sakila","root");
  return $Mypdo;
};

$variable1['view']=function(){
  return new \Slim\Views\PhpRenderer('view');
};


$Myapp->get("/", "\controlador:listadoPeliculas");
$Myapp->get("/{id}", "\controlador:TodolosDatos");
$Myapp->get("/skjson/{id}", "\controlador:datosjson");

$Myapp->run();
?>


<?php 
 ?>
