<?php
$cadena = "1+7+4-2+3-5";
$array = explode("+", $cadena);
$array2 = explode("-", $cadena);
$suma = 0;
$resta = 0;
$resul = 0;
echo "<br><br>El número de elementos + es: " . count($array);
echo "<br><br>El número de elementos - es: " . count($array2);

// strpos

for ($i=0;$i<count($array);$i++){
  echo "#$array[$i]#<br>";
    $suma = $suma + $array[$i];
  }
for ($i=0;$i<count($array2);$i++){
    $resta = $resta + $array2[$i];
}

 echo "<br>";
 echo "la suma de la cadena es ".$suma;
 echo "<br>";
 echo "La resta de la cadena es ".$resta;
 echo "<br>";
 $resul=$suma-$resta;
 echo "El resultado de la cadena ".$resul;
 ?>
