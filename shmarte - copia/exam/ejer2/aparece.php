<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Aparece</title>
  </head>

  <body>
    <h1>Apariciones</h1>
    <?php
    $cad1 ="La casa de la ladera";
    $cad2 ="la";
    $resul=cuenta($cad1, $cad2);
    echo "<p>La sale $resul veces</p>";
     ?>
  </body>
</html>


<?php
function cuenta($cadena1, $cadena2){
$counter = 1;
$valcad2 = $cadena2;
$segmento_cadena1 ="";
$segmento_cadena1 = explode(" ", $cadena1); // Busco los espacios en blanco
$segmento_cadena2 = explode("la", $cadena2); // Busco la cadena la en todo el array
print_r ($valcad2);
echo "<br>";
print_r ($segmento_cadena1);
echo "<br>";
for ($i=0; $i<count($segmento_cadena1) ; $i++) {
  if($segmento_cadena1=$valcad2){ // compruebo si dentro del array hay la cadena la
    $counter++; // Suma los que si
  }
}
for ($i=0;$i<count($segmento_cadena1) ; $i++) {  // Compruebo si dentro del segundoArray la esta la cadena la
  if($segmento_cadena2=$valcad2){
    $counter++; // me suma uno mas por ladera
  }
}

return $counter;

}
 ?>
