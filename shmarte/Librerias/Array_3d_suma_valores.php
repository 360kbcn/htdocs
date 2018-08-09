<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array 3D Con funcion</title>

  </head>
  <body>
    <h1>Array 3D Con funcion</h1>
 <?php
 $a = [
   [5,4,9],
   [6,8,2],
   [1,4,9],
 ];


bucle_for($a);

$res = sumaArray2d($a);
echo "<p>La suma de los valores de la matriz $res</p>";


$pares = paresArrays($a);
echo "<p>Hay $pares números pares</p>";

function paresArrays($par) {
  $contador = 0;
  for ($i=0;$i<count($par); $i++){
    for ($j=0; $j< count ($par[$i]); $j++ ) {
      if ($par[$i][$j] % 2 == 0){
        $contador++  ;
      }
    }
  }
  return $contador;
}

function bucle_for ($valor) {
  $suma_columnas=0;
  echo "<table border='1'>";
  // indice de columnas
  echo "<tr><th></th>";
  for ($i=0; $i < count ($valor[0]) ; $i++) {
    echo "<th>$i</th>";
  }
  echo "</tr>";

  // datos y indices de Filas
  for ($i=0; $i < count ($valor) ; $i++) {
    echo "<tr>";
    echo "<th>$i</th>";
    for ($j=0; $j< count ($valor[$i]); $j++ ) {
      echo "<td>".$valor[$i][$j]."</td>";
    }
    echo "</tr>";
    }
    echo "</table>";
  }

  function sumaArray2d($arr){
    $sum=0;
    for ($i=0;$i<count($arr); $i++){
    for ($j=0; $j< count ($arr[$i]); $j++ ) {
   // $sum = $sum+$arr[$i][$j];
    $sum+=$arr[$i][$j]; // Esto es lo mismo que la linea de Arriba pero bien

    }
  }
    return $sum;
  }

  ?>


  </body>
</html>
