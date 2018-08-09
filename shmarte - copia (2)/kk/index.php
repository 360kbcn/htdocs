<?php
  session_start();
  if(!isset($_SESSION['lista'])) $_SESSION['lista']=[];
  if(isset($_POST['palabra'])) $_SESSION['lista'][]= $_POST['palabra'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Session List</title>
  </head>
  <body>
    <h1>Session List</h1>
    <form action="" method="post">
      <label for="pal">Palabra</label>
      <input type="text" id="pal" name="palabra">
      <button type="submit">Añadir</button>
    </form>

    <a href="lista.php">Ver lista de palabras</a><br>
    <a href="finaliza.php">Finalizar sesión</a>
  </body>
</html>
