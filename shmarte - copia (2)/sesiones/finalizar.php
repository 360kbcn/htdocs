<?php
  session_start();
//  if (isset($_SESSION['contador']) && isset($_SESSION['contador2'])){  // Para tener un and
    $contador=0;
    $contador2=0;
    if (isset($_SESSION['contador'])){
    $contador = $_SESSION['contador'];
  }else{
    $contador = 0;
  }
  if (isset($_SESSION['contador2'])){
    $contador2 = $_SESSION['contador2'];
  }else{
    $contador2 =0;
  }
  $_SESSION = [];
  session_destroy();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesiones</title>
  </head>
  <body>
    <h1>Sesiones</h1>
    <p>Las sesiones han finalizado.</p>
    <p> Has visto la pagina Index <strong>
      <?php
        echo $contador;
       ?>
    </strong> veces. </p>
    <p> y la pagina 2 <strong>
      <?php
        echo $contador2;
       ?>
    </strong> veces .</p>
    <a href="index.php">Iniciar Otra Sesión</a>

  </body>
</html>
