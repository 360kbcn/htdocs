<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cole</title>
    <link rel="stylesheet" href="<?php echo $data['urlbase']; ?>/view/estilos.css">
  </head>
  <body>
    <h1>Cole</h1>
    <?php require_once("nav.php"); ?>
    <?php
      if(isset($data['msg'])){
        echo "<p class='msg'>".$data['msg']."</p>";
      }
    ?>
    <h2>Nuevo alumno</h2>
    <form action="" method="post">
      <label for="n">nombre</label>
      <input type="text" name="nombre" id="n" required>
      <label for="m">mail</label>
      <input type="mail" name="mail" id="m" required>
      <button type="submit">Crear Alumno</button>
    </form>
  </body>
</html>
