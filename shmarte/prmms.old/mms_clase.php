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



}

?>
