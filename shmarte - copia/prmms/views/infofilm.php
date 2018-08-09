<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datos Film</title>
  </head>
  <body>
    <h1>Datos Film</h1>
    <table>
      <?php var_dump($data);
      foreach ($data['pelicula'] as $valor) {
        echo "<tr>";
        echo "<th>".$valor['titulo']."</th>";
        echo "</tr>";
      }
       ?>
    </table>
    <th></th>
    <td></td>
  </body>
</html>
