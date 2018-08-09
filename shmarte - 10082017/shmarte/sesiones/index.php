<?php

  session_start();

  if (isset($_SESSION['contador'])) {
    $_SESSION['contador']++;
  }else {
    $_SESSION['contador']=1;
  }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Sesiones_1</title>
   </head>
   <body>
     <h1> Sessiones Pagina 1 </h1>
     <p> Has visitado la página <strong>
       <?php
        echo $_SESSION['contador'];
        ?>
     </strong> veces. </p>
     <a href="index.php">Recarga</a><br>
     <a href="medio.php">Pagina_2</a><br>
     <a href="finalizar.php">Finalizar</a>

   </body>
 </html>
