<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <input type="text" name="Jug" >
    <input type="number" name="Tirada" >
    <button type="submit" >Grabar</button>
  </body>
</html>
<?php
  $Jugador = "";
  $Tir = 0;
  if (isset($_GET['Jug'])) $Jugador = $_GET['Jug'];
  if (isset($_GET['Tirada'])) $Tir = $_GET['Tirada'];
  var_dump($Jugador);
  $fp = fopen("Aleatorio.txt","w");
  $str = $Jugador;
  fwrite($fp,$str);
  fclose($fp);
  var_dump($str);
 ?>
