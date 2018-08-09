<?php
require_once("con_sql.php")
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Continentes</title>
    <link rel="stylesheet" href="preferens.css">
  </head>
  <body>
    <head>
          <h1 id="h1">Tabla Continentes</h1>
    </head>

    <nav>
      <h2 id="h2"></h2>
      <p><br></p>

      <?php

        $conti = "";
        $lista_cont = "";
        $lista_cont = consul($conti);
        for ($i=0; $i<count($lista_cont) ; $i++) {
          $posicion=$i;
          echo "<li><a href='#$posicion'>$lista_cont[$i]</a><li>";
        }


       ?>


</nav>
  </body>
</html>
