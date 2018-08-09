<?php
  class BdCole {
    private $ci;

    function __construct(Interop\Container\ContainerInterface $ci){
      $this->ci = $ci;
    }

    public function getAlumnos($request, $response, $args){
      $sql = "select * from alumno;";
      $res = $this->ci->bd->query($sql);
      $dat = $res->fetchAll();
      $response = $response->withJson($dat);
      return $response;
    }

    public function nuevoAlumno($request, $response, $args){
      $params = $request->getParsedBody();
      $n = $params['nombre'];
      $m = $params['mail'];
      $sql = "inser intro alumno(nombre, mail) values('$n','$m')";
      $this->ci->bd->exec($sql);
      $response = $response->withJson([$n,$m]);
      return $response;
    }
}
?>
