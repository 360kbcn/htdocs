<?php
  require "vendor/autoload.php";
  $app = new Slim\App();

  $n1=0;

//    $app->get("/numero/{num}", function($request, $response, $args){

    $app->get("/numero", function($request, $response, $args){

      $n1=$request->getQueryParam("num");

  // $n1=$args['num'];


  for ($i=0; $i<=$n1; $i++) {
    if ($i %2==0){
       $response->write("El: ".$i." es par "."</br>");

      }

    }
      return $response;
  });


  $app->run();
