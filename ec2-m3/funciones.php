<?php


  function ValorMaximo($numeros){
    foreach ($numeros as $numero) {
      if(!isset($valor)){
        $valor = $numero;
      }elseif ($valor < $numero) {
        $valor = $numero;
      }

    }
      return $valor;
  }


  function ValorMinimo($numeros){
    foreach ($numeros as $numero) {
      if(!isset($valor)){
        $valor = $numero;
      }elseif ($valor > $numero) {
        $valor = $numero;
      }

    }
      return $valor;
  }

  function token($cadena){
    $guion = "-";
    $menorq ="<";
    $mayorq = '>';
    $mitadcadena = intval(strlen($cadena)/2)-2;
    $estaelguion = strpos($cadena, $guion,$mitadcadena);
    $posmenorque = strpos($cadena, $menorq,$mitadcadena);
    $posmayorque = strpos($cadena, $mayorq,$mitadcadena);
    if (($estaelguion !==false) && ($posmenorque !==false) && ($posmayorque !==false)){
     $mediocadena = intval(strlen($cadena)/2);
     if($estaelguion == $mediocadena && $posmenorque == $mediocadena -1 && $posmayorque == $mediocadena +1) return true;
     if($estaelguion == $mediocadena-1 && $posmenorque == $mediocadena -2 && $posmayorque == $mediocadena) return true;
     if($estaelguion == $mediocadena+1 && $posmenorque == $mediocadena && $posmayorque == $mediocadena +2) return true;
      }
      return false;
  }

 ?>
