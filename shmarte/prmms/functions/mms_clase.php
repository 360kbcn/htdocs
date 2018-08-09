<?php

class BDmms {
  private $variable2;

  function __construct(Interop\Container\ContainerInterface $variable2){
    $this->variable2 = $variable2;
  }

  public function guide($request, $response, $arguments){
    $this->variable2->view->render($response, "guide.php",[]);
    return $response;
  }

  public function home($request, $response, $arguments){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $mycon = $this->variable2->bd;
    $sql= "SELECT ge.genero, se.titulo, se.titulo_url, se.imagen, se.sinopsis
    FROM genero ge JOIN series se ON (se.genero=ge.id)
    WHERE se.genero=ge.id
    GROUP BY se.titulo;";
    $res = $mycon->query($sql);
    if(!$res){
      $datos['error'][]=$mycon->errorInfo()[2];
      $datos['series'] = [];
    }else{
      $datos['series'] = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    $this->variable2->view->render($response,"index.php", $datos);
    return $response;
  }

  public function series($request, $response, $arguments){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $mycon = $this->variable2->bd;
    $titulo_url = $arguments['titulo_url'];
    $sql= "SELECT ge.genero, se.titulo, se.imagen, se.sinopsis
    FROM genero ge JOIN series se ON (se.genero=ge.id)
    WHERE se.titulo_url='$titulo_url';";
    $res = $mycon->query($sql);
    if(!$res){
      $datos['error'][]=$mycon->errorInfo()[2];
      $datos['series'] = [];
    }else{
      $datos['series'] = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    $this->variable2->view->render($response,"serie_id.php", $datos);
    return $response;
  }

  public function seriesjson($request, $response, $arguments){
    $id = $arguments['id'];
    $mycon = $this->variable2->bd;
    $sql= "SELECT * FROM series WHERE id=$id;";
    $res = $mycon->query($sql);
    if(!$res){
      $datos['error'][]=$mycon->errorInfo()[2];
      $datos['series'] = [];
    }else{
      $datos['series'] = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    return $response->withjson($datos);
  }

  public function seriesfull($request, $response, $arguments){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $mycon = $this->variable2->bd;
    $sql= "SELECT ge.genero, se.titulo, se.titulo_url, se.imagen, se.sinopsis
    FROM genero ge JOIN series se ON (se.genero=ge.id)
    WHERE se.genero=ge.id
    GROUP BY se.titulo;";
    $res = $mycon->query($sql);
    if(!$res){
      $datos['error'][]=$mycon->errorInfo()[2];
      $datos['series'] = [];
    }else{
      $datos['series'] = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    $this->variable2->view->render($response,"filmfull.php", $datos);
    return $response;
  }

  public function seriesfulljson($request, $response, $arguments){
    $mycon = $this->variable2->bd;
    $sql= "SELECT ge.genero, se.titulo, se.titulo_url, se.imagen, se.sinopsis
    FROM genero ge JOIN series se ON (se.genero=ge.id)
    WHERE se.genero=ge.id
    GROUP BY se.titulo;";
    $res = $mycon->query($sql);
    if(!$res){
      $datos['error'][]=$mycon->errorInfo()[2];
      $datos['series'] = [];
    }else{
      $datos['series'] = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    return $response->withjson($datos);
  }

  public function genero($request, $response, $arguments){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $mycon = $this->variable2->bd;
    $sql= "SELECT * FROM genero;";
    $res = $mycon->query($sql);
    if(!$res){
      $datos['error'][]=$mycon->errorInfo()[2];
      $datos['genero'] = [];
    }else{
      $datos['genero'] = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    $this->variable2->view->render($response,"genero.php", $datos);
    return $response;
  }

  public function generoid($request, $response, $arguments){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $mycon = $this->variable2->bd;
    $generoid = $arguments['id'];
    $sql= "SELECT *
    FROM genero JOIN series ON genero.id = series.genero
    WHERE genero.id = $generoid;";
    $res = $mycon->query($sql);
    if(!$res){
      $datos['error'][]=$mycon->errorInfo()[2];
      $datos['generoid'] = [];
    }else{
      $datos['generoid'] = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    $this->variable2->view->render($response,"generoid.php", $datos);
    return $response;
  }
}

?>
