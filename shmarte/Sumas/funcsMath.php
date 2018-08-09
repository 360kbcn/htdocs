<?php
function eficiente($cadena){
  $resul = eval('return '.$cadena.';');
return $resul;
}
?>


<?php
function Calculadora($cadena){
  $strlen = strlen($cadena);
  $suma = 0;
  $resta = 0;
  $resultado = 0;
  $array = str_split($cadena);
  $is_suma = null;
  $actual_number = 0;
  // Recorremos la cadena con bucle for
  for( $i = 0; $i < $strlen; $i++ ) {
      $char = $array[$i];
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
  $resultado = $suma+$resta;
  return $resultado;
}
 ?>
