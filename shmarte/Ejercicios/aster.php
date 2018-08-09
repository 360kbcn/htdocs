<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Aster</title>
  </head>
  <body>
    <h1>Introduce los valores</h1>
    <form class="" action="" method="">
      <p><input type="numero" name="n1"size="5" required>&nbsp;Cuantas Filas</p>
      <p><input type="numero" name="n2"size="5" required>&nbsp;Cuantas Columnas</p>
      <p><input type="numero" name="n3"size="5" required>&nbsp;Cuantos Asteriscos</p>
      <input type="submit" name="Enviar" size="8">
    </form>
    <?php
    $valor1=0; $valor2=0; $valor3=0;
    $comprueba=0;
    if (isset($_GET['n1']) && $_GET['n1']!="")
      $valor1=$_GET['n1'];
    if (isset($_GET['n2']) && $_GET['n2']!="")
      $valor2=$_GET['n2'];
    if (isset($_GET['n3']) && $_GET['n3']!="")
      $valor3=$_GET['n3'];
     $array_envio=crea_tabla($valor1, $valor2, $valor3);
     print_r($array_envio);
     ?>

  </body>
</html>

<?php
function crea_tabla($str1, $str2, $str3) {

for ($i=0;$i<$str1; $i++) {  // poner a igual 

  for ($j=0;$j<$str2;$j++){
    $tablero[$i][$j]=" ";
  }
}

for ($n=0; $n<$str3 ; $n++) {
  $tablero[rand(0,$str1-1)][rand(0,$str2-1)] = "*";
}

return $tablero;

}


/*
function arrayAsteriscos($f, $c, $a){
  //$f=3, $c=4, $a=4
  $ar = [
    ['','','*',''],
    ['*','','',''],
    ['','*','*','']
  ]
  return $ar;
}


 ?>
*/
