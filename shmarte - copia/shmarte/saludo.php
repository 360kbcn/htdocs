<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saludo</title>
  </head>
  <body>
    <h1>Saludo</h1>
    <form action="" method="get">
      Nombre<br>
      <input type="text" name ="Nombre" value="">
      <br>
      Apellido<br>
      <input type="text" name="Apellido" Value="">
      <br><br>
      <input type ="submit" value="Enviar">
    </form>

    <?php
      $nombre = "anónimo";
      $apellido = "";

      if(isset($_GET['Nombre'])) $nombre = $_GET['Nombre'];
      if(isset($_GET['Apellido']))$apellido = $_GET['Apellido'];

      echo saludaA($nombre, $apellido);
      //echo '<p>Hola $nombre $apellido</p>';
      /*sdfsdf
sdfsdfsdf
      */

      $a = [15=>3,5,"c"=>66,89];
      $b = [6,55,4,26];

      for($i=0; $i<count($b); $i++){
        echo $i."---".$b[$i]."<br>";
      }
      echo "<hr>";
      foreach ($a as $c => $v) {
        echo $c."---".$v."<br>";
      }
    ?>

    <a href="primerhtml.html">Inicio</a>
  </body>
</html>

<?php
function saludaA($n, $a){
  $out = "<p>Hola $n $a</p>";
  return $out;
}

?>
