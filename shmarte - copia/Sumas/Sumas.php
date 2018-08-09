<?php
// Definimos una cadena de caracteres
$str = "-25-37+5+54-9+8+42";
// Con strlen calculamo el tamaño de la cadena
$strlen = strlen($str);
//  Definimos las variables de suma y resta
$suma = 0;
$resta = 0;
// Con str_split, convertimos la cadena en un array en el que cada posicion contiene un caracter de la cadena
$array = str_split($str);
// Recorremos la cadena con bucle for
for( $i = 0; $i < $strlen; $i++ ) {
    // char sera la posicion actual que estemos recorriendo con el bucle
    $char = $array[$i];
    // Si estamos en la posicion 0, miramos si el primer numero es positivo o negativo (ya que puede ser que si es positivo, no tenga ningun simbolo de '+')
    if($i == 0 && $char != '-')
      $suma =$suma + $array[$i];
    else if ($char == '-') //Si el caracter que estamos recorriendo es un simbolo de '-'
      $resta = $resta + $array[$i+1]; //Vamos a añadir en la variable 'resta', el siguiente caracter despues del simbolo
    else if ($char == '+') //y lo mismo con la suma
      $suma = $suma + $array[$i+1];
}

echo $resta+$suma;

//[NOTA], los var_dumps son como los echo pero que te imprime el resultado con un salto de linea
//var_dump("SUMA ->" . $suma);
//var_dump("RESTA ->" . $resta);
//var_dump("TOTAL ->" . ($suma - $resta));
?>
