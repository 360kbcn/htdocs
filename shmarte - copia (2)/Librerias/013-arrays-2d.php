<?php require_once("013-arrays2d-funcs.php"); ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Arrays 2D (tercera segunda)</title>
    <link rel="stylesheet" href="estilosarray.css">
  </head>
  <body>
    <h1>Arrays 2D (tercera parte)</h1>
    <h2>Recorrer un array 2D</h2>
    <?php
      $a = [
        [1,2,1,2],
        [1,2,1,2],
        [1,2,1,2]
      ];

      showArrayAsTable($a);
    ?>

    <h2>Suma de array 2D</h2>
    <p>Suma todo el contenido de una tabla de dos dimensiones.</p>
    <h3>El array</h3>
    <?php showArrayAsTable($a); ?>
    <h3>El resultado</h3>
    <?php $res = sumaArray2D($a); ?>
    <p>La suma es <strong><?php echo $res; ?></strong></p>

    <h2>Cuenta pares en array 2D</h2>
    <h3>El array</h3>
    <?php
      $a=[
        [5,4,34,2321,7],
        [66,5,87,678,12],
        [1,3,2,4,5]
      ];
      showArrayAsTable($a);
    ?>
    <h3>El resultado</h3>
    <?php $res = cuentaParesArray2D($a); ?>
    <p>Hay <strong><?php echo $res; ?></strong> números pares.</p>

    <h2>Suma de 2 Arrays 2D</h2>
    <h3>Los arrays</h3>
    <?php
      $ar1 = [
        [1,2,3],
        [40,2,11]
      ];

      $ar2 = [
        [5,4,1],
        [55,3,22]
      ];
      showArrayAsTable($ar1);
      showArrayAsTable($ar2);
    ?>
    <h3>La suma</h3>
    <?php
      $res = suma2Arrays2D($ar1, $ar2);
      showArrayAsTable($res);
    ?>
  </body>
</html>
