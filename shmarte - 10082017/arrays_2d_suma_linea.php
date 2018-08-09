<?php require_once("SumaArray_por_lineas.php"); ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Arrays 2D (Última parte)</title>
    <link rel="stylesheet" href="estilosarray.css">
  </head>
  <body>
    <h1>Arrays 2D (Última parte)</h1>
    <h2>Suma filas array</h2>
    <h3>Array</h3>
    <?php
      $a = [
        [1,2,3,4],
        [7,3,6,1],
        [4,5,7,3],
      ];

      showArrayAsTable($a);
    ?>
    <h3>Suma Filas</h3>
    <?php
      $s = sumaFilasArray($a);
      showArrayAsTable($s);
    ?>

    <h3>Suma Columnas</h3>;

  <?php
    $s= sumaColumansaArray($a);
    showArrayAsTable($s);
   ?>

   <h3>sumaDiagonal</h3>;

   <?php
   $s= sumaDiagonal($a);
   showArrayAsTable($s);

    ?>

  </body>
</html>
