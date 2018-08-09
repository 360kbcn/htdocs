<?php

class BDmms {
  private $variable2;

  function __construct(Interop\Container\ContainerInterface $variable2){
    $this->variable2 = $variable2;
  }

  public function guide($request, $response, $args){
    $this->variable2->view->render($response, "guide.html",[]);
    return $response;
  }

  public function movie($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $id = $args['id'];
    $mycon = $this->variable2->bd;
    $sql= "select * from series where id=$id;";
    $res = $mycon->query($sql);
        if(!$res){
          $datos['error'][]=$mycon->errorInfo()[2];
          $datos["series"] = [];
        }else{
          $datos ['series'] = $res->fetchAll(PDO::FETCH_ASSOC);
       }

      $this->variable2->view->render($response,"infofilm.php", $datos);
      return $response;
    }

    public function moviefull($request, $response, $args){
      $datos['urlbase'] = $request->getUri()->getBasePath();
      $mycon = $this->variable2->bd;
      $sql= "SELECT ge.genero, se.titulo, se.titulo_url, se.imagen, se.sinopsis
             from genero ge JOIN series se ON (se.genero=ge.id)
             where se.genero=ge.id
             GROUP by se.titulo;";
      $res = $mycon->query($sql);
          if(!$res){
            $datos['error'][]=$mycon->errorInfo()[2];
            $datos["series"] = [];
          }else{
            $datos ['series'] = $res->fetchAll(PDO::FETCH_ASSOC);
         }

        $this->variable2->view->render($response,"filmfull.php", $datos);
        return $response;
      }

  // Esta funcion es la que ataca la base de datos y extra de la tabla los datos para el foreach de borrar.html
  function listado($str){ // Funcion Listado que nos muestra en la pantalla index.php el contenido de la tabla personas
  global $mysql360;
  $nom_lista=$str;
    // si no especificamos en la caja de busqueda ningun dato nos lanza consulta para ver toda la bbdd
    $consql = "select * from personas";
  }


  function borrar($str){ // Funcion borrar datos
    global $mysql360;
    $del_id=$str; // recojemos el id que hay al pulsar sobre el boton papelera
    $sqlcontact = "DELETE from personas where id=$del_id";
    // consulta para el borrado de los datos con el id
    $resul = $mysql360->exec($sqlcontact);
    // Ejecutamos la consulta
  }
  return;


}

?>
