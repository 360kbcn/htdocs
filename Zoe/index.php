<?php

  require "vendor/autoload.php";
  require "controllers.php";

  $configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
  ];

  $c = new \Slim\Container($configuration);

  $app = new Slim\App($c);

  //Dependències

  //BBDD
  $c = $app->getContainer();
  $c['bd'] = function(){

    //Arxiu amb les dades de configuració de la BBDD
    require_once("admin/php/dades.php");

  	$pdo = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass);
  	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	return $pdo;
  };

   //Vistes (php-views)
  $c['view'] = function(){

    return new \Slim\Views\PhpRenderer('views');
  };



  //Rutes
  $app->get("/", "\CMS:Home");
  $app->get("/categoria/{id}", "CMS:Categoria");
  $app->get("/articulo/{id}", "CMS:Articulo");

  //Rutes API
  $app->get("/api", "API:Doc");
  $app->get("/api/articulos/{id}", "API:Articulo");
  $app->get("/api/articulos", "API:Articulos");


  $app->run();
?>
