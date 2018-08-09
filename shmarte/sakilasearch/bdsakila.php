<?php
class controlador {
  private $variable2;

  function __construct(Interop\Container\ContainerInterface $variable2){
    $this->variable2 = $variable2;
  }

  public function listadoPeliculas($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
    $min = $request->getQueryParam("Min",0);
    $max = $request->getQueryParam("Max",250);
    if ($min<$max){

    $movie = $request->getQueryParam("Movies"," ");
    $con =$this->variable2->bd;
    $res = $con->query("SELECT film_id, title, length FROM film WHERE title like '$movie%' and length >= $min and length <=$max ORDER by title ASC");
    $datos['res'] = $res->fetchAll();
  }else{
    $datos['msg']="xxxxxxxx";
    $datos['res']=[];
  }
    $this->variable2->view->render($response, "lista.php", $datos);
    return $response;
  }

  public function TodolosDatos($request, $response, $args){
      $DatosTodos['urlbase'] = $request->getUri()->getBasePath();
      $id_movie=$args['id'];
      $mycon=$this->variable2->bd;
      $consul1 = "SELECT fl.title as titulo, fl.release_year as Produccion, la.name as Idioma, fl.length as Duracion, cy.name as Categoria, fl.description as Sinopsis
      FROM film fl JOIN language la ON (fl.language_id=la.language_id) JOIN film_actor fc ON (fl.film_id=fc.film_id) JOIN film_category ca ON (fl.film_id=ca.film_id) JOIN category cy ON (ca.category_id=cy.category_id) JOIN actor ao ON (fc.actor_id=ao.actor_id)
      WHERE fl.film_id ='$id_movie'
      GROUP by fl.title";

      $arrayTodo = $mycon->query($consul1);

      $consul2 = "SELECT ao.first_name as Nombre_Actor, ao.last_name Apellido_Actor
      FROM film fl JOIN film_actor fc ON (fl.film_id=fc.film_id) JOIN actor ao ON (fc.actor_id=ao.actor_id)
      WHERE fl.film_id ='$id_movie'";

      $arrayActores = $mycon->query($consul2);
      $DatosTodos ['arrayPelicula'] = $arrayTodo->fetch(PDO::FETCH_ASSOC);
      $DatosTodos ['arrayActores'] =$arrayActores->fetchAll(PDO::FETCH_ASSOC);
      $this->variable2->view->render($response,"datosakila.php",$DatosTodos);

      return $response;
  }

  public function datosjson($request, $response, $args){
    $DatosTodos['urlbase'] = $request->getUri()->getBasePath();
    $id_movie=$args['id'];
    $mycon=$this->variable2->bd;
    $consul1 = "SELECT fl.title as titulo, fl.release_year as Produccion, la.name as Idioma, fl.length as Duracion, cy.name as Categoria, fl.description as Sinopsis
    FROM film fl JOIN language la ON (fl.language_id=la.language_id) JOIN film_actor fc ON (fl.film_id=fc.film_id) JOIN film_category ca ON (fl.film_id=ca.film_id) JOIN category cy ON (ca.category_id=cy.category_id) JOIN actor ao ON (fc.actor_id=ao.actor_id)
    WHERE fl.film_id ='$id_movie'
    GROUP by fl.title";
    $arrayTodo = $mycon->query($consul1);
    $DatosTodos ['arrayPelicula'] = $arrayTodo->fetch(PDO::FETCH_ASSOC);

    return $response->withJson($DatosTodos);
  }


}
 ?>
