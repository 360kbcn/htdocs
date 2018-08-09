<?php
Session_start();
require_once('procedure.php');

echo "<p id='Bien'>Valor incorrecto no puede ser 0, negativo o > de 100 </p>";
echo "<p id='Bien'>  Pulsa Volver para seguir tu partida o Nuevo Juego para empezar de 0</p>";

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Impropio</title>
     <link rel="stylesheet" href="propiedades.css">
     <form action="" method="get">

     <!--Vamos a darle al Jugador la Oportunidad de Seguir con su partida o volver a empezar-->
       <input id="btn1" type="Submit" name="btnVOLVER" value="VOLVER">
       <input id="btn1" type="Submit" name="btnNuevoJuego" value="Jugar de Nuevo">
       </form>
       <?php
       // if (isset($_GET['btnNuevoJuego']))
       if (isset($_GET['btnVOLVER']))
       header('location:index.php');
       if(isset($_GET['btnNuevoJuego']))
       dead();
        ?>
   </head>
   <body>

   </body>
 </html>
