<?php
// nota para mi libreria -pagina calc_pag2.php -
function Calculadora($cadena){
  $strlen = strlen($cadena);  //Obtenemos el tamaño de la cadena
  $suma = 0;    // DEclaracion de variables
  $resta = 0;
  $resultado = 0;
  $array = str_split($cadena); // str_split obtenemos un array en el que cada posicion obtiene un caracter de la cadena
  $is_suma = null;
  $actual_number = 0;
  // Recorremos la cadena con bucle for
  for( $i = 0; $i < $strlen; $i++ ) {
      $char = $array[$i];  // Miramos el signo del primer numero por si es positivo no tenga el +
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
      // Aqui se comprueban los singnos
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
  // Calculo de la diferencia y devuelvo el resultado
  $resultado = $suma+$resta;
  return $resultado;
}
 ?>
