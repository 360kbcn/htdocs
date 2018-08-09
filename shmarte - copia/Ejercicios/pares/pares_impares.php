<?php
require_once("funciones.php");
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Pares</title>
  </head>
  <body>
    <h1> introduce una cadena de numeros </h1>
    <form class="" action="" method="get">
        <input type="number" name="numeros" value="0">
        <input type="submit">
    </form>
    <?php
      $cadena = "";
      if (isset($_GET['numeros']) && $_GET['numeros']!="")
        $cadena = $_GET['numeros'];
      $sol = dispar($cadena); // para definir el array hay que ponerlo asi
                              // de otra manera solo le damos una valor a la variable
    echo "<p>Suma pares ".$sol[0]." Suma Impares".$sol[1]."</p>"
    // sol[0], sol[1] son las posiciones de los valores devueltos de la funcion
     ?>
  </body>
</html>
