<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Suma de 2 Arrays 2d</title>
  </head>
  <body>
    <h1>Array 3D Con funcion</h1>
 <?php
 $a = [
   [5,4,9],
   [6,8,2],
   [1,4,9],
 ];

 $b =[
   [9,4,1],
   [2,8,6],
   [9,4,5],
 ];

$c= sumaArray2d($a, $b);

pintaArray3($c);

function sumaArray2d($a, $b){
    $c=[];
    for ($i=0;$i<count($a); $i++){
      $c[$i]=[];
      for ($j=0; $j< count ($a[$i]); $j++ ) {
        $c[$i][$j] = $a[$i][$j]+ $b[$i][$j];
    }
    }
    return $c;
  }

  function pintaArray3($n){

   echo "<table border='1'>";
   // indice de columnas
   echo "<tr><th></th>";
   for ($i=0; $i < count ($n[0]) ; $i++) {
     echo "<th>$i</th>";
   }
   echo "</tr>";

   // datos y indices de Filas
   for ($i=0; $i < count ($n) ; $i++) {
     echo "<tr>";
     echo "<th>$i</th>";
     for ($j=0; $j< count ($n[$i]); $j++ ) {
       echo "<td>".$n[$i][$j]."</td>";
     }
     echo "</tr>";
     }
     echo "</table>";
   }


  ?>


  </body>
</html>
