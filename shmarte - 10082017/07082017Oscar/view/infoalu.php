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
        foreach ($data['error'] as $msg) {
          echo "<p class='error'>$msg</p>";
        }
      }
    ?>
    <h2>Datos alumno</h2>
    <table>
      <?php
        foreach ($data['alumno'][0] as $key => $value) {
          echo "<tr>";
          echo "<th>$key</th>";
          echo "<td>$value</td>";
          echo "</tr>";
        }
      ?>
    </table>

    <h2>Notas</h2>
    <table>
      <?php
        foreach ($data['notas'] as $nota) {
          echo "<tr>";
          echo "<th>".$nota['nombre']."</th>";
          echo "<td>".$nota['nota']."</td>";
          echo "</tr>";

        }
      ?>
    </table>
  </body>
</html>
