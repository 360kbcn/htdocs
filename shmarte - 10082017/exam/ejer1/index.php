<?php
session_start();
if (!isset($_SESSION['user'])) header("Location: login.php");
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Private User</title>
   </head>
   <body>
     <h1>Zona Privada de Usuarios</h1>
     <div class="user">
       <?php echo $_SESSION['user']; ?>
       <a href="fin.php">Salir</a>
     </div>
     <div class="clear">
     </div>
     <header>
       <p>Hola <strong>!!! has entrado</strong></p>
     </header>
   </body>
 </html>
