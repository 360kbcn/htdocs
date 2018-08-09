<?php
class BDsakila {
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
    $res = $con->query("SELECT title, length FROM film WHERE title like '$movie%' and length >= $min and length <=$max ORDER by title ASC");
    $datos['res'] = $res->fetchAll();
  }else{
    $datos['msg']="xxxxxxxx";
    $datos['res']=[];
  }
    $this->variable2->view->render($response, "intro.php", $datos);
    return $response;
  }

}
 ?>
