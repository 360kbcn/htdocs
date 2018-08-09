<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cole</title>
    <link rel="stylesheet" href="<?php echo $data['urlbase']; ?>/view/estilos.css">
  </head>
  <body>
    <h1>Cole</h1>
    <nav>
      <ul>
        <li><a href="<?php echo $data['urlbase']; ?>">HOME</a></li>
        <li><a href="<?php echo $data['urlbase']; ?>/alumnos">ALUMNOS</a></li>
        <li><a href="<?php echo $data['urlbase']; ?>/alumnos/1">ALUMNO 1</a></li>
      </ul>
    </nav>
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
