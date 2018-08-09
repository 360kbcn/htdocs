<?php
require "vendor/autoload.php"
// require "controlador.php"

Slim::registerAutoloader();


$app = new Slim();

$app->get('/', function() {
  echo "Hola Mundo";

$app->run();
 ?>
