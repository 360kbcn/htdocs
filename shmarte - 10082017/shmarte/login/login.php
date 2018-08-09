<?php
session_start();
  if(isset($_SESSION['user'])) header("Location: pag2.php");
  if(isset($_POST['user'])){
    $us = $_POST['user'];
    $pw  = isset($_POST['password'])?$_POST['password']:"";
    require_once("users.php");
    $validado = validarUser($us, $pw);
    if($validado){
      $_SESSION['user'] =$us;
     header("Location: pag2.php");
    }

  }
 ?>

 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>Indice de login</title>

   </head>
   <body>
     <section class="login">
   <h1>Bienvenido</h1>
   <h2>Tienes que introducir tu Usuario y Contraseña</h2>

   <form action="" method="post">
     <p>
      <label for="us"</label>
      User: <input type="text" id="us" size="10" name="user" placeholder="minusculas" style="text-transform:lowercase;">
    <label for="pas"</label>
      pass: <input type="password" id="pass" size="10" name="password" placeholder="Max 3 char" style="text-transform:lowercase;">
  </p>
  <p>
    <input type="submit" size="7" value="Enviar">
  </p>
   </form>
   </section>
  <?php
    if(isset($validado) && !$validado){ ?>
      <div class="Atencion">
        <button type="button">x</button>
        <p>Nombre de usuario o contraseña incorrecta.</p>
      </div>
      <?php } ?>
   <br>

   </body>
 </html>
