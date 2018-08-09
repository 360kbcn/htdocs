<?php
require "vendor/autoload.php";
require "funciones.php";
require "doc.php";

$app = new Slim\App();

$app->get("/", function($req, $res, $args){
  global $doc;
  $res->write($doc);
  return $res;
});

$app->get("/funciones/generos", "\Libros:generos");

$app->run();

?>
