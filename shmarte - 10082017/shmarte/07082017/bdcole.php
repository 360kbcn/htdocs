<?php

  class Bdcole {
    private $ci;

    function __construct(Interop\Container\ContainerInterface $ci){
      $this->ci = $ci;
    }

    public function listaAlumnos($request, $response, $args){
      $sql = "select * from alumno;";
      $res = $this->ci->bd->query($sql);
      //$dat = $res->fetchAll(PDO::FETCH_ASSOC);
      //$response = $response->withJson($dat);
      if(!$res){
        $msg = $con->errorInfo()[2];
        // $response->write("<p>$msg</p>");
        $datos['error']=$msg;
        $datos['alumnos']=[];
      }else{

        $datos['alumnos'] = $res->fetchAll();
        }
      
        $this->ci->view->render($response, 'listalumnos.php', $datos);

        return $response;

    }

    public function datoAlumno($resquest, $response, $arg){
      $con = $this->ci->bd;
      $params = $resquest->getParsedBody();
      $id =$arg['id'];
      $sql = "select a.id, a.nombre, a.mail, x.nombre as asigna, s.nota
FROM alumno a,  alum_asig s, asignatura x
WHERE a.id=".$id." and s.alum=a.id and x.id=s.asig;";

      $res = $con->query($sql);
      if(!$res){
        $msg = $con->errorInfo()[2];
        $datos['error']=$msg;
        $datos['alumnos']=[];
      }else{
        $datos['alumnos']=$res->fetchAll(PDO::FETCH_ASSOC);
      }
        $this->ci->view->render($response,'listalumnos.php', $datos);
        return $response;

    }

    public function home($request, $response, $args){
      $datos['urlbase'] = $resquest->getUri()->getBasePath();
      $this->ci->view->render($response,"home.php", $datos);
      return $response;
    }

  }
 ?>
