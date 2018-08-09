<?php require_once("funcs.php"); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>palabras</title>
  </head>
  <body>
    <h1>Palabras</h1>
    <form action="" method="get">
      <input type="text" name="frase" value="">
      <button type="submit">Partir</button>
    </form>

    <?php
      $f = "";
      if(isset($_GET['frase'])) $f = $_GET['frase'];

      $palabras = partirFrase($f);
    ?>

    <ul>
      <?php
      for ($i=0; $i < count($palabras); $i++) {
        echo "<li>".$palabras[$i]."<li>";
      }
      ?>
    </ul>
  </body>
</html>
