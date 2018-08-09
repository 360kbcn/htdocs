<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datos Film</title>
  </head>
  <body>
    <h1>Datos Film</h1>
    <table>
      <?php
      foreach ($data['series'] as $valor) {
        echo "<tr>";
        echo "<th>".$valor['titulo'].$valor['titulo_url'].$valor['imagen'].$valor['sinopsis'].$valor['genero']."</th>";
        echo "</tr>";
      }
       ?>
    </table>
    <th></th>
    <td></td>
  </body>
</html>
