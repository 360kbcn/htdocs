<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de alumnos</title>
  </head>
  <body>
    <h1>Lista de alumnos</h1>
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
