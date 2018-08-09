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

    <h2>Editar alumno</h2>
    <form action="<?php echo $data['urlbase']."/editaralumno/".$data['alumno']['id']; ?>" method="post">
      <input type="hidden" name="_METHOD" value="PUT">
      <label>id: <?php echo $data['alumno']['id']; ?></label>
      <label for="n">nombre</label>
      <input type="text" name="nombre" id="n" value="<?php echo $data['alumno']['nombre']; ?>" required>
      <label for="m">mail</label>
      <input type="mail" name="mail" id="m" value="<?php echo $data['alumno']['mail']; ?>" required>
      <button type="submit">Modificar Alumno</button>
    </form>
  </body>
</html>
