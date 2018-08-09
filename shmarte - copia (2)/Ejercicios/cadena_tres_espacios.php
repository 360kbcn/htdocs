<?php
require_once("funciones.php");
 ?>

<!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>Palabras</title>
   </head>
   <body>
     <h1> Introduce una cedena de palabras </h1>
     <form class="" action="" method="get">
        <input type="text" name="cadena">
        <input type="submit">
     </form>
     <?php
     $cadena2 ="";
     if (isset($_GET['cadena']) && $_GET['cadena']!="")
     $cadena2 = $_GET['cadena'];
     $tres = 0;
        $resul = espacios($cadena2);
     echo "<p>cadena ".$resul."</p>";
     // print_r($resul); nos devuelve el array con sus valores 
      ?>

   </body>
 </html>
