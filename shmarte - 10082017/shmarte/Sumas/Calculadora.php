<?php
// Definimos una cadena de caracteres
$str = "-901-1";

// Con strlen calculamo el tamaño de la cadena
$strlen = strlen($str);
//  Definimos las variables de suma y resta
$suma = 0;
$resta = 0;
// Con str_split, convertimos la cadena en un array en el que cada posicion contiene un caracter de la cadena
$array = str_split($str);
$is_suma = null;
$actual_number = 0;
// Recorremos la cadena con bucle for
for( $i = 0; $i < $strlen; $i++ ) {
    // char sera la posicion actual que etemo recorriendo con el bucle

    $char = $array[$i];
    // Si estamos en la posicion 0, miramos si el primer numero es positivo o negativo (ya que puede ser que si es positivo, no tenga ningun simbolo de '+')
    if($i == 0){
      if( $char == '+' )
        $is_suma = true;
      if( $char == '-')
        $is_suma = false;
      if( $char != '+' && $char != '-'){

           $is_suma = true;
           $actual_number = $actual_number . $char;
      }
    }
    else if ($char == '-' || $char == '+' ){
       if($is_suma)
         $suma = $suma + $actual_number;
       else
         $resta = $resta + $actual_number;
       if ($char == '+')
           $is_suma = true;
       else
           $is_suma = false;

      $actual_number = 0;
    }
    else{
        $actual_number = $actual_number . $char;

    }
    if($i == $strlen - 1){
         if($is_suma)
          $suma = $suma + $actual_number;
        else
          $resta = $resta + $actual_number;
    }

}

//[NOTA], los var_dumps son como los echo pero que te imprime el resultado con un salto de linea
var_dump("SUMA ->" . $suma);
var_dump("RESTA ->" . $resta);
var_dump("TOTAL ->" . ($suma - $resta));
?>
