<?php
  session_start();
  if(!isset($_SESSION['user'])) header("Location: login.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Zona privada</title>
  <!--  <link rel="stylesheet" href="css/estilos.css"> -->
  </head>
  <body>
    <header>
      <h1>Zona privada</h1>
      <div class="user">
      <!--  <img src="img/user.png" width="100" height="100" alt="foto usuario"> -->
        <?php echo $_SESSION['user']; ?>
       <a href="logout.php">Salir</a>
      </div>
      <div class="clear"></div>
    </header>
    <main>
      <p>Bienvenido <strong></strong>!!! Estás en tu zona privada.</p>
      
    </main>
  </body>
</html>
