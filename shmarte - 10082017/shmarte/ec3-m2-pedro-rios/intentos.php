<?php  // Pagina donde mostramos Que ha perdiido la partida
Session_start();
require_once('procedure.php');
 ?>
 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>Perdistes</title>
     <link rel="stylesheet" href="propiedades.css">
   </head>
   <p id="Bien">P E R D I S T E S has superado los 10 Intentos</p>
   <body>
     <form action="" method="get">
       <input id="btn1" type="Submit" name="btnNuevoJuego" value="Jugar de Nuevo">
       </form>
       <?php
       if (isset($_GET['btnNuevoJuego']))
       dead();
        ?>
   </body>
 </html>
