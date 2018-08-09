<?php
class BDfilms {
  private $variable2;

  function __construct(Interop\Container\ContainerInterface $variable2){
    $this->variable2 = $variable2;
  }

  public function listadoPeliculas($request, $response, $args){
    $datos['urlbase'] = $request->getUri()->getBasePath();
  //  $min = $request->getQueryParam("Min");
//    $max = $request->getQueryParam("Max");
    $con =$this->variable2->bd;
    // $res = $con->query("SELECT title, length FROM film ORDER by title ASC");
//    $res = $con->query("SELECT title, length FROM film WHERE length <= $min and length => $max ORDER by title ASC");

    $this->variable2->view->render($response, "home.php", $datos);
    return $response;
  }

}
 ?>
