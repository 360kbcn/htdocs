<?php
  session_start();
  if(isset($_SESSION['user'])) header("Location: index.php");
  if(isset($_POST['user'])){
    $us = $_POST['user'];
    $pw = isset($_POST['password'])?$_POST['password']:"";
    require_once("users.php");
    $validado = validarUser($us, $pw);
    if($validado){
      $_SESSION['user'] = $us;
      header("Location: index.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <section class="login">
      <h1>Login</h1>
      <form action="" method="post">
        <label for="us">Usuario</label>
        <input type="text" id="us" name="user">
        <label for="pas">Contraseña</label>
        <input type="password" id="pas" name="password">
        <button type="submit">Acceder</button>
      </form>
    </section>
  <?php if(isset($validado) && !$validado){ ?>
    <div class="alerta">
      <button type="button">x</button>
      <p>Nombre de usuario o contraseña incorrecta.</p>
    </div>
  <?php } ?>
  <script src="js/eventos.js"></script>
  </body>
</html>
