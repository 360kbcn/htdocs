<?php

require_once ("consulta.php");

$movie = "A";
if(isset($_GET['c']))
  $movie = $_GET['c'];
 ?>

 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>Peliculas</title>
     <!--<link rel="stylesheet" href="peliculas.css">-->
   </head>
   <body>
     <!--<h1><?php echo $movie; ?></h1>-->
     <nav>
       <ul>
         <h1 margin:center>Peliculas</h1>
         <?php
         for ($i=65; $i<91 ; $i++) {
        $letra=chr($i);
           echo "<a  href='?c=$letra'>$letra</a> ";
         }
         echo "<br>";
         $resul = getPeliculasporletras($movie);

          foreach ($resul as $fila) {
          $url = urlencode($fila['title']);
          if($fila['title']==$movie)
            echo "<li><a class='actual' href='?c=$url'>${fila['title']}</a></li>";
          else
            echo "<li><a href='?c=$url'>${fila['title']}</a></li>";
        }
          ?>
       </ul>
     </nav>
     <main>
     </main>
   </body>
 </html>
