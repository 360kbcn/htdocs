<?php

class BDcartelera{

  private $ci;

  function __construct(Interop\Container\ContainerInterface $ci){

    $this->ci = $ci;
  }
  private function menu(){

    $con = $this->ci->bd;
    $sql2=<<<consulta2
        SELECT cartelera.id AS 'ID PELI',cartelera.categoria_id AS 'ID CATEGORIA', categorias.nombre AS 'NOMBRE CATEGORIA'
        FROM cartelera JOIN categorias ON ( cartelera.categoria_id = categorias.id)
consulta2;

    $sql= <<<consulta
      SELECT  DISTINCT cartelera.categoria_id AS 'ID CATEGORIA', categorias.nombre AS 'NOMBRE CATEGORIA'
      FROM cartelera JOIN categorias ON ( cartelera.categoria_id = categorias.id)


consulta;

    $res = $con->query($sql);
    $res2 = $con->query($sql2);


    if(!$res){
      $msg = $con-> errorInfo()[2];
      $datos ['error']= $msg;
      $datos ['general'] = [];
    }else{
      $datos['general'] = $res-> fetchAll();
      $datos['menu2'] = $res2-> fetchAll();
    }

    return $datos;


  }
  public function home ($request, $response,$arg){



    $datos['cat_actual_id'] = -1;
    //$datos["apartado"] = ["Home"];

    /*cortar URL*/
    $datos['urlbase'] = $request->getUri()->getBasePath();

    /*concadena arrays */
     $datos = array_merge($datos,$this->menu());

    /*Renderizamos a la carpeta vista*/

    $this->ci->vista->render($response,"home.php",$datos);
    return $response;
  }

  public function categoria ($request, $response,$arg){


    $datos = $this->menu();
    $datos['cat_actual_id'] = $arg['id'];
    $id=$arg['id'];
    /*cortar URL*/
    $datos['urlbase'] = $request->getUri()->getBasePath();
    /*Conexión*/
    $con = $this->ci->bd;

    /*Consulta $SQL*/

    $sql=<<< consulta
      SELECT cartelera.titulo, cartelera.foto, cartelera.id AS ID_PELICULA, categorias.nombre AS Genero, categorias.id AS IDC
      FROM cartelera JOIN categorias ON(cartelera.categoria_id= categorias.id)
      WHERE categoria_id = $id;
consulta;

    $res = $con->query($sql);

    if(!$res){
      $msg = $con-> errorInfo()[2];
      $datos ['error']= $msg;
      $datos ['categorias'] = [];
    }else{
      $datos['categorias'] = $res-> fetchAll();
    }

    /*Renderizamos a la carpeta vista*/

    $this->ci->vista->render($response,"categoria.php",$datos);
    return $response;

  }

  public function articulo ($request, $response,$arg){


    $datos = $this->menu();
    //$datos['cat_actual_id'] = $arg['id'];
    $datos['art_actual_id'] = $arg['id'];

    $id=$arg['id'];

    /*cortar URL*/
    $datos['urlbase'] = $request->getUri()->getBasePath();
    /*Conexión*/
    $con = $this->ci->bd;

    /*Consulta $SQL*/

    $sql=<<< consulta

    SELECT cartelera.titulo AS titulo, cartelera.foto AS foto, cartelera.anyo AS 'año', cartelera.director AS director, cartelera.sinopsis AS sinopsis, cartelera.id AS ID_PELICULA,categorias.nombre AS NOMGENERO, categorias.id AS ID_GENERO
    FROM cartelera JOIN categorias ON(cartelera.categoria_id= categorias.id)
    WHERE cartelera.id = $id

consulta;

    $res = $con->query($sql);

    if(!$res){
      $msg = $con-> errorInfo()[2];
      $datos ['error']= $msg;
      $datos ['articulo'] = [];
    }else{
      $datos['articulo'] = $res-> fetch();
      $datos['cat_actual_id'] = $datos['articulo']['ID_GENERO'];
    }

    /*Renderizamos a la carpeta vista*/

    $this->ci->vista->render($response,"articulo.php",$datos);
    return $response;

  }
  /* FUNCIONES JSON */

  public function apidocumentacion ($request, $response,$arg){




    /*cortar URL*/
    $datos['urlbase'] = $request->getUri()->getBasePath();





    $this->ci->vista->render($response,"apidocumentacion.php",$datos);
    return $response;
  }


  public function jsarticulos ($request,$response,$arg){

    $sql = "SELECT cartelera.titulo AS titulo, cartelera.foto AS foto, cartelera.anyo AS 'año', cartelera.director AS director, cartelera.sinopsis AS sinopsis, categorias.nombre AS Genero
    FROM cartelera JOIN categorias ON(cartelera.categoria_id= categorias.id)WHERE cartelera.id";
    $res = $this->ci->bd->query($sql);
    $dat = $res->fetchAll(PDO::FETCH_ASSOC);
    $response = $response->withJson($dat);
    return $response;
  }

  public function jsarticuloid ($request,$response,$arg){
    $id=$arg['id'];
    $sql = "SELECT cartelera.titulo AS titulo, cartelera.foto AS foto, cartelera.anyo AS 'año', cartelera.director AS director, cartelera.sinopsis AS sinopsis, categorias.nombre AS Genero
    FROM cartelera JOIN categorias ON(cartelera.categoria_id= categorias.id)WHERE cartelera.id = $id";
    $res = $this->ci->bd->query($sql);
    $dat = $res->fetchAll(PDO::FETCH_ASSOC);
    $response = $response->withJson($dat);
    return $response;
  }

  public function jsgenero ($request,$response,$arg){
    $id=$arg['id'];
    $sql = "SELECT cartelera.titulo AS titulo, cartelera.foto AS foto, cartelera.anyo AS 'año', cartelera.director AS director, cartelera.sinopsis AS sinopsis, categorias.nombre AS GENERO
    FROM cartelera JOIN categorias ON(cartelera.categoria_id= categorias.id)WHERE categorias.id=$id";
    $res = $this->ci->bd->query($sql);
    $dat = $res->fetchAll(PDO::FETCH_ASSOC);
    $response = $response->withJson($dat);
    return $response;
  }

}
?>
