<?php

class BDmms {
  private $variable2;

  function __construct(Interop\Container\ContainerInterface $variable2){
    $this->variable2 = $variable2;
  }

  public function guides($request, $response, $args){
    $this->variable2->view->render($response, "guide.html",[]);
    return $response;
  }

  public function xx($request, $response, $args){
    $datos['urlbase'] = $resquest->getUri()->getBasePath();
    $iden = $args['id'];
    $mycon = $this->variable2->bd;
    $sql = "SELECT * FROM pelicula WHERE id =$iden;";

      $respuesta = $mycon->query($sql);
        if(!$respuesta){
          $datos['error'][]=$mycon->errorInfo()[2];
          $datos["pelicula"] = [];
        }else{
          $datos["pelicula"] = $respuesta->fetchAll(PDO::FETCH_ASSOC);
        }

      $this->variable2->view->render($response,"infofilm.php", $datos);
      return $response;
    }


}

?>



<?php
    // La consulta
/*    SELECT titulo, titulo_url, imagen, sinopsis, genero
FROM pelicula
WHERE id ='1' */
 ?>
