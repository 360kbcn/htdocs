<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>array 3D Con Funcion</title>
  </head>
  <body>
     <h1>array 3d Con funcion</h1>

     <?php
          $a = [
            [5,4,9],
            [6,8,7],
            [1,4,9],
          ];



      bucle_for($a);

      echo "<table>"
      //echo "<tr><th></th>"

      //echo "<br>";


    function bucle_for ($valor) {
      for ($i=0; $i < count ($valor) ; $i++) {
        for ($j=0; $j< count ($valor[$i]); $j++ ) {


          echo   $valor[$i][$j]." ";
        }
        echo "<br>";
      }
    }

    echo "</table>"

  ?>
  </body>
</html>
