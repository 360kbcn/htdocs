<?php
  session_start();
  if (isset($_SESSION['intro[]']))
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ver Palabras</title>
  </head>
  <body>
    <h1><strong>Estas es la lista de Palabras</strong></h1>
    <br>
    <ol>
      <li>
      <?php
        for ($i=0;$i<count("$intro")$i++){
          echo $intro[$i];
        }
       ?>
       </li>
    </ol>
    <a href="index.php">Palabras</a><br>
  </body>
</html>
