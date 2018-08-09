<?php
class BDcole {
  private $ci;

  function __construct(Interop\Container\ContainerInterface $ci){
    $this->ci = $ci;
  }

  public function listaAlumnos($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
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


  public function infoAlumno($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $id = $args['id'];
    $con = $this->ci->bd;
    $sql['alumno'] = "select * from alumno where id=$id;";
    $sql['notas'] = "select a.nombre, aa.nota
    from asignatura a, alum_asig aa
    where a.id=aa.asig and aa.alum=$id;";

    foreach ($sql as $key => $consulta) {
      $res = $con->query($consulta);
      if(!$res){
        $datos['error'][]= $con->errorInfo()[2];
        $datos[$key] = [];
      }else{
        $datos[$key] = $res->fetchAll(PDO::FETCH_ASSOC);
      }
    }

    $this->ci->view->render($response, "infoalu.php", $datos);

    return $response;
  }


  public function home($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $this->ci->view->render($response, "home.php", $datos);
    return $response;
  }

  public function newAlumnoform($)
}
?>
