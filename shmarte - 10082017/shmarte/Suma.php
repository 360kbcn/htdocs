<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Suma server</title>
  </head>
  <body>
    <h1>Suma server</h1>
    <form method="get" action="Suma.php">
      <input type="number" name="n1" value="0"> <!--Pinta TextBox para introducir datos -->
      <input type="number" name="n2" value="0">
      <input type="submit"> <!-- Pinta el boton submit -->
    </form>
    <?php

      $n1 = 0;
      $n2 = 0;

      if(isset($_GET['n1']) && $_GET['n1']!=="")
        $n1 = $_GET['n1'];

      if(isset($_GET['n2']) && $_GET['n2']!="")
        $n2 = $_GET['n2'];

      $sum = $n1 + $n2;
      if(isset($_GET['n1']))
        echo "<p>$n1 + $n2 = $sum</p>";
     ?>
  </body>
</html>
