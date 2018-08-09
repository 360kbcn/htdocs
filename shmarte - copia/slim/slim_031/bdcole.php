<?php
class BDcole {
  private $ci;

  function __construct(Interop\Container\ContainerInterface $ci){
    $this->ci = $ci;
  }

  public function listaAlumnos($request, $response, $args){
    $con = $this->ci->bd;
    $res = $con->query("select nombre from alumno;");
    if(!$res){
      $msg = $con->errorInfo()[2];
      $datos["error"]=$msg;
      $datos["alumnos"]=[];
    }else{
      $datos["alumnos"] = $res->fetchAll();
    }
    $this->ci->view->render($response, "listaalumnos.php", $datos);
    
    return $response;
  }
}
?>
