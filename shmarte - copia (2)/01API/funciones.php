<?php
require "libros.php";
class Libros{
  private $vlibro;

  function __construc(Interop\Container\ContainerInterface $vlibro){
    $this->vlibro = $vlibro;

  }

  public function generos($request, $response, $arg){

    $solicita = datos();

    $gen = array_column($solicita, "genero");

    $res = array_unique($gen);

    $response = $response->withJson($res);

    return $response;

  }
}
 ?>
