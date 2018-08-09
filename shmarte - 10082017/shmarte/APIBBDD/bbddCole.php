<?php
  class BbBdCole {
    private $ci;

    function __construc(Interop\Container\ContainerInterface $ci){
      $this->ci = $ci;
    }

    public function getAlumnos($request, $response, $args){
      $sql = "select * from alumno;";
      $res = $this->ci->bd->query($sql);
      $datos = $res->fetchAll();
      $response = $response->withJson($datos);
      return $response;
    }

}
 ?>
