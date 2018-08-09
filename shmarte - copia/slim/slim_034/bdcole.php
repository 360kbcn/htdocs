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
    $datos = $this->datosAlumno($args['id']);
    $datos['urlbase'] = $request->getUri()->getBasePath();

    $this->ci->view->render($response, "infoalu.php", $datos);

    return $response;
  }


  public function home($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $this->ci->view->render($response, "home.php", $datos);
    return $response;
  }

  public function newAlumnoForm($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $this->ci->view->render($response, "newalumno.php", $datos);
    return $response;
  }


  public function newAlumno($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();

    $params = $request->getParsedBody();
    $n = $params['nombre'];
    $m = $params['mail'];

    $sql = "insert into alumno(nombre, mail) values('$n', '$m');";
    $con = $this->ci->bd;
    $res = $con->exec($sql);

    if($res>0) $datos['msg'] = "Alumno $n dado de alta correctamente.";
    else $datos['msg'] = "El alumno $n no se ha podido dar de alta.";

    $this->ci->view->render($response, "newalumno.php", $datos);
    return $response;
  }

  public function editarAlumnoForm($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $id = $args['id'];
    $con = $this->ci->bd;
    $res = $con->query("select * from alumno where id=$id");

    $datos["alumno"] = $res->fetch();

    $this->ci->view->render($response, "editaralumno.php", $datos);
    return $response;
  }


  public function editarAlumno($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $id = $args['id'];
    $params = $request->getParsedBody();
    $n = $params['nombre'];
    $m = $params['mail'];
    $con = $this->ci->bd;

    $sql = "update alumno set nombre='$n', mail='$m' where id=$id;";
    $res = $con->exec($sql);

    if($res>0) $datos['msg'] = "Datos actualizados.";
    else $datos['msg'] = "No se han podido actualizar los datos.";

    $aux = $this->datosAlumno($id);
    $datos = array_merge($datos, $aux);

    $this->ci->view->render($response, "infoalu.php", $datos);
    return $response;
  }

  private function datosAlumno($id){
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
    return $datos;
  }
}
?>
