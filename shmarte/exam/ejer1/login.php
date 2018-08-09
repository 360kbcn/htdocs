<?php
session_start();
  if(isset($_SESSION['user'])) header("Location: index.php")
  if(isset($_POST['user'])){
    $usuario =$_POST['user'];
    $clave = isset($_POST['pass'])?$_POST['pass']:"";
    require_once("usuarios.php");
    $valida = userfuncion($usuario, $clave);
    if ($validando){
      $_SESSION['user'] =$usuario;
      header("Location: index.php")
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <section class="login">
      <p>Introduce la clave</p>
      <form class="" action="" method="post">
        <p>
          <label for="usa"></label>
          User:<input type="text" name="user" placeholder="minusculas" style="text-transform:lowercase;">
          <label for="pass"></label>
          pass: <input type="password" size="10" name="passr" style="text-transform:lowercase;">
        </p>
        <p>
          <input type="submit" value="Enviar">
        </p>
      </form>
    </section>
    <?php
    if(isset($valida) && !$valida){ ?>
      <div class="Error">
      <button type="button" name="button"></button>
      <p> Datos Erroneos</p>
      </div>
    <?php } ?>
     
  </body>
</html>
