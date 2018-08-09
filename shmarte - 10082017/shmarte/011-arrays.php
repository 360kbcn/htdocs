<?php
  require_once("011-arrays-funcs.php");
  $a = [1,5,3,4,7,8];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Arrays (primera parte)</title>
    <link rel="stylesheet" href="estilosarray.css">
  </head>
  <body>
    <h1>Arrays (primera parte)</h1>
    <?php showArrayAsTable($a); ?>

    <h2>Suma</h2>
    <p>El array suma <strong><?php echo sumaArray($a); ?></strong></p>

    <h2>Impares</h2>
    <p>El array tiene <strong><?php echo cuentaImparesArray($a); ?></strong> números impares</p>

    <h2>¿Array ordenado?</h2>
    <h3>Ejemplo de array ordenado</h3>
    <?php
      $a = [2,4,5,5,8,65,87];
      showArrayAsTable($a);
      $ord = "NO ESTÁ ORDENADO";
      if(isOrdenado($a)) $ord = "SI ESTÁ ORDENADO";
      echo "<p>El array <strong>$ord</strong></p>";
    ?>

    <h3>Ejemplo de array no ordenado</h3>
    <?php
      $a = [5,23,2,76,4,6,2];
      showArrayAsTable($a);
      $ord = "NO ESTÁ ORDENADO";
      if(isOrdenado($a)) $ord = "SI ESTÁ ORDENADO";
      echo "<p>El array <strong>$ord</strong></p>";
    ?>

    <h2>Suma de dos arrays</h2>
    <h3>Arrays</h3>
    <?php
      $a1 = [1,2,33,4];
      $a2 = [8,7,66,5];
      showArrayAsTable($a1);
      showArrayAsTable($a2);
      $sArrs = sumaArrays($a1, $a2);
    ?>
    <h3>Suma</h3>
    <?php showArrayAsTable($sArrs); ?>

    <h2>Array multiplicado por...</h2>
    <h3>Original</h3>
    <?php
      $a = [1,3,5,6,9,4];
      showArrayAsTable($a);
    ?>
    <h3>Multiplicado por <strong>3</strong></h3>
    <?php
      productoArrayPorEscalar($a, 3);
      showArrayAsTable($a);
    ?>
  </body>
</html>
