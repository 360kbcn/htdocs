<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista palabras</title>
  </head>
  <body>
    <h1>Lista palabras</h1>
    <?php
      if(!isset($_SESSION['lista']) || count($_SESSION['lista'])==0){
        echo "<p>No hay datos</p>";
      }else{
        echo "<ul>";
        foreach ($_SESSION['lista'] as $pal) {
          echo "<li>$pal</li>";
        }
        echo "</ul>";
      }
    ?>
    <a href="index.php">Añadir nueva palabra</a><br>
    <a href="finaliza.php">Finalizar sesión</a>
  </body>
</html>
