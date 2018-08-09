<?php
  require "vendor/autoload.php";
  require "numeros.php";
  //require "numeros_con_response.php";

  $app = new Slim\App();

  $app->get("/numeros/pares", "\Numeros:numerosPares");

  $app->get("/numeros/impares", "\Numeros:numerosImpares");

  $app->get("/numeros/divisores", "\Numeros:Divisores");

  $app->run();

?>
