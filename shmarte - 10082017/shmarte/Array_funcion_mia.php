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
   [6,8,7],
   [1,4,9],
 ];



bucle_for($a);


function bucle_for ($valor) {
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

  ?>


  </body>
</html>
