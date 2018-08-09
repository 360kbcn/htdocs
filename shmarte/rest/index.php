<?php
  require "vendor/autoload.php";

  $app = new Slim\App();

  $app->get("/saludar/{nombre}", function($request, $response, $args){
   $response->write("<h1>Hola".$args['nombre']."</h1>");
          return $response;
  });

  $app->get("/metodo", function($request, $response, $args){
   $response->write("Metodo get !!!!");
          return $response;
  });

  $app->post("/metodo", function($request, $response, $args){
   $response->write("Metodo post !!!!");
          return $response;
  });

  $app->put("/metodo", function($request, $response, $args){
   $response->write("Metodo put !!!!");
          return $response;
  });

  $app->delete("/metodo", function($request, $response, $args){
   $response->write("Metodo delete !!!!");
          return $response;
  });


  $app->run();
?>
