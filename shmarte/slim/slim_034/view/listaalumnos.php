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
      if(isset($data['error'])){
        echo "<p class='error'>".$data['error']."</p>";
      }
    ?>
    <ul>
      <?php
        foreach ($data['alumnos'] as $alumno) {
          echo "<li>".$alumno['nombre']."</li>";
        }
      ?>
    </ul>
  </body>
</html>
