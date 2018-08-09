<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones</title>
  </head>
  <body>
    <h1>Funciones</h1>
    <?php
      require_once("funciones-string.php");
      $cad = "";

      if(isset($_GET['cad'])){
        $cad = $_GET['cad'];
      }
    ?>

    <form class="" action="" method="get">
      <input type="text" name="cad" value="<?php echo $cad; ?>">
      <input type="submit">
    </form>

    <ul>
      <li><strong>Num espacios: </strong><?php echo contarEspacios($cad); ?></li>
      <li><strong>Num carácteres no espacio blanco: </strong><?php echo contarNoEspacios($cad); ?></li>
      <li><strong>Mayus y minus: </strong><?php echo primeraMayus($cad); ?></li>
      <li><strong>¿Es cap i cua?: </strong><?php echo capIcua($cad)?"SI":"NO"; ?></li>
      <li><strong>Sustituir NO por (---): </strong><?php echo tabuNO($cad); ?></li>
    </ul>

  </body>
</html>
