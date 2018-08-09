<?php
Session_start();
require_once('procedure.php');
echo "<p id='Bien'>A C E R T A S T E S  el numero has necesitado ".$_SESSION['contador']." Intentos</p>";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Triunfo</title>
    <link rel="stylesheet" href="propiedades.css">
  </head>
  <body>
    <form action="" method="get">

    <!--<h1 id="h1">Has acertado el Numero</h1>-->
      <input id="btn1" type="Submit" name="btnNuevoJuego" value="Jugar de Nuevo">
      </form>
      <?php
      if (isset($_GET['btnNuevoJuego']))
      dead();
       ?>
  </body>
</html>
