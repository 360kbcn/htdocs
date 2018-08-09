<?php
function dispar($str){ // solo un valor ver el return para saber
                        // como devolver dos valores
$suma_par = 0;
$suma_impar = 0;
for ($i=0;$i<strlen($str);$i++){
  if ($str[$i] % 2 == 0){
    $suma_par = $suma_par + $str[$i];
  }else{
    $suma_impar = $suma_impar + $str[$i];
  }
}
return [$suma_par, $suma_impar]; // al poner entre corchetes las variable
                                  // podemos devolver mas de una valor al
                                  // array principal
}
 ?>


<?php

 function espacios($str){
 $valor_cadena= "";
 $contador=0;
 $tres =0;
 $valor_cadena = explode(" ",$str);
 for ($i=0;$i<count($valor_cadena);$i++){
   $tres=strlen($valor_cadena[$i]);
   if ($tres>3){
   $contador++;
   }
 }

 return $contador;
 }

?>
