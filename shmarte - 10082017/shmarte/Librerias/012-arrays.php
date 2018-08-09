<?php require_once("012-arrays-funcs.php"); ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Arrays (primera segunda)</title>
    <link rel="stylesheet" href="estilosarray.css">
  </head>
  <body>
    <h1>Arrays (segunda parte)</h1>
    <h2>Recorrer un array con claves</h2>
    <?php
      $a = [3, 4=>66, 12, 15=>"jeje", "a"=>123, 55];
      foreach ($a as $key => $value) {
        echo "<p>$key --- $value</p>";
      }
    ?>

    <h2>Mostrar array en forma de tabla</h2>
    <?php showArrayAsTable($a); ?>

    <h2>Diagrama de barras</h2>
    <?php $a = ["Mates"=>8, "Programación"=>9, "Historia"=>4, "Física"=>6]; ?>
    <h3>Datos</h3>
    <?php showArrayAsTable($a); ?>
    <h3>Diagrama</h3>
    <?php barChart($a); ?>
  </body>
</html>
