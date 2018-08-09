<?php
  class Numeros{
    private $ci;

    function __construc(Interop\Container\ContainerInterface $ci){
      $this->ci = $ci;
    }

    public function numerosPares($request, $response, $args){
      $max = $request->getQueryParam("max",20);
      $min = $request->getQueryParam("min",0);
      if ($min%2!=0) $min++;

      $num=[];

      for($i=$min; $i<=$max; $i+=2){

        $num[]=$i;

      }

      $response = $response->withJson($num);

      return $response;
    }

    public function numerosImpares($request, $response, $args){
      $max = $request->getQueryParam("max",20);
      $min = $request->getQueryParam("min",0);
      if ($min%2==0) $min++;

      $num=[];

      for($i=$min; $i<=$max; $i+=2){
          $num[]=$i;
      }

      $response = $response->withJson($num);

      return $response;
    }

    public function Divisores($request, $response, $args){
      $div = $request->getQueryParam("Div",20);

        $num=[];

      for($i=1; $i<=$div; $i++){
          if ($div%$i==0){
            $num[]=$i;
          }
      }

      $response = $response->withJson($num);
      return $response;
    }
  }

 ?>
