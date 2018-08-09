<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2 comentado</title>
  </head>
  <body>
    <h1>Ejercicio 2 Comentado</h1>
    <p>Funcion que cuante el numero de palabras de mas de 3 letras de una cadena</p>
    <?php
    $cad ="La casa verde de gruesas paredes.";
    $npals = cuentapalabrasmas3($cad);
    echo $npals;
     ?>
  </body>
</html>


<?php
function cuentapalabrasmas3($str){
$pals = 0;
$letras = 0;
$f = " ".$str." ";

for ($i=1; $i<strlen($f); $i++) {
  if($f[$i]!=" "){
    if($f[$i-1]==" ") $letras=1;
    else $letras++;
  }else if($letras>3){
    $pals++;
  }
  }
return $pals;
}
 ?>
