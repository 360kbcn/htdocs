<?php
session_start();
if (isset($_SESSION['tiradas'])){
  $_SESSION['tiradas']--;
}else{
  $_SESSION['tiradas']=10;
}
 ?>

 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>Juego Aletorio</title>
   </head>
   <body>

   </body>
 </html>
