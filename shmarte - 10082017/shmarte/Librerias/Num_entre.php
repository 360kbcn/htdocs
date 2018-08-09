<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Numeros Entre</title>
  </head>
  <body>
    <h1>Numeros Entre </h1>
    <?php
      $ini = 0;
      $fin = 0;

      if (isset($_GET['inicio']) && $_GET['inicio']!=""){
        $ini = $_GET['inicio'];
      }

      if (isset($_GET['fin']) && $_GET['fin']!=""){
        $ini = $_GET['fin'];
      }
     ?>

     <form class="" action="" method="get">
       <input type="number" name="inicio" value="<?php echo $ini; ?>">
       <input type="number" name="fin" value="<?php echo $fin; ?>">
       <input type="submit">
    </form>

    <?php
      if (isset($_GET['inicio'])){
        echo "<ul>";
        for ($i=$ini; $i<= $fin; $i++){
          echo "<li>$i<li>";
      }
      echo "</ul>";
    }
     ?>
  </body>
</html>
