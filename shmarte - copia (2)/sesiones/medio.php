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
     <title>Sesion_2</title>
   </head>
   <body>
     <h1> Sessiones Pagina 2 </h1>
     <p> Has visitado la página <strong>
       <?php
        echo $_SESSION['contador2'];
        ?>
     </strong> veces. </p>
     <a href="medio.php">Recarga</a><br>
     <a href="index.php">Index</a><br>
     <a href="finalizar.php">Finalizar</a>

   </body>
 </html>
