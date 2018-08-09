<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>array 3D</title>
  </head>
  <body>
     <h1>array 3d</h1>

     <?php
          $a = [
            [5,4,9],
            [6,8,7],
            [1,4,9],
          ];

          for ($i=0; $i < count ($a) ; $i++) {

            for ($j=0; $j< count ($a[$i]); $j++ ) {

              $a[$i][$j];
              echo $a[$i][$j]." ";

            }
            echo "<br>";
          }
          ?>
  </body>
</html>
