<?php

  /**
  * Libreria de funciones matemáticas.
  *
  *@author anonimo <anonimo@server.com>
  *
  *@license GPL
  *
  *
  *
  */

  namespace ejemplo\mates;

  /**
  * Suma de dos numeros enteros.
  *
  *@param int $a Primer numero a sumar.
  *@param int $b Segundo numero a sumar.
  *
  *
  *@return int Resultado de la suma entre $a y $b.
  *
  *@deprecated 4 No uses mas esta funcion
  *
  */

  function suma($a, $b)

      //TODO Esta por terminar
  {
    return $a+$b;
  }

  /**
  * Suma todos los valores del array pasado como argumento.
  *
  * @param[] $ar Array dde enteros que se quieren sumar.
  *
  *@return int el resultado de sumas todos los números del array de entrada.
  */

  function sumaArray($ar){
    $sum = 0;
    foreach ($ar as $n) {
      $sum+=$n;
    }
    return $sum;
  }


 ?>
