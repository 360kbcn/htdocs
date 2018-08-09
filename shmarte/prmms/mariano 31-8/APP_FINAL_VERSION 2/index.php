<?php

require_once 'vendor/autoload.php';
require_once 'functions/mms_clase.php'; // requerimos las clase definida bdsakila donde iran las consultas
require_once 'app/functions/bdconfig.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);

$Myapp = new Slim\App($c);

$variable1 = $Myapp->getContainer();
$variable1['bd'] = function(){
  // Conexion para la BD
  $Mypdo = new PDO("mysql:host=localhost;dbname=pinkladyseries","root");
  $Mypdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  return $Mypdo;
};

$variable1['view']=function(){
  return new \Slim\Views\PhpRenderer('views');
};


$Myapp->get("/", "\BDmms:home");
$Myapp->get("/rest", "\BDmms:guide");
$Myapp->get("/series", "\BDmms:seriesfull");
$Myapp->get("/genero", "\BDmms:genero");
$Myapp->get("/series/{id}", "\BDmms:series");
$Myapp->get("/genero/{id}", "\BDmms:generoid");
$Myapp->get("/seriesjson", "\BDmms:seriesfulljson");
$Myapp->get("/seriesjson/{id}", "\BDmms:seriesjson");


$Myapp->run();
?>
