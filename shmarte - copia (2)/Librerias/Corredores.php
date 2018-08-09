<?php require_once("funcs_corredores.php"); ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Datos Entrenamiento</title>
  </head>
  <body>
    <h1>Datos Entrenamiento</h1>
    <table>
      <tr>
      <th>Corredor</th>
      <th>Tiempo Medio</th>
      <th></th>
    </tr>
    <?php
      $tiempos_semana = [
        "corredor1" =>[60,58,58,56,61,58,59],
        "corredor2" =>[76,70,72,70,68,67,67],
        "corredor3" =>[55,56,55,56,54,54,53],
        "corredor4" =>[69,75,71,72,71,70,72],
        "corredor5" =>[56,56,53,55,55,54,53],
        "corredor6" =>[55,53,54,79,74,61,55]
      ];

      $enlace = "destalles.php";

      echo "Datos Entrenamiento"."<br>";
      echo "<br>";
      echo "Corredor tiempo medio"."<br>";
      echo "<br>";
      echo "<br>";

      foreach ($tiempos_semana as $corredor => $tiempos) {
        // $c= media_corredor($tiempos);
        $c= media_corredor($tiempos);
        //echo $corredor." ".round($c,2);
        //echo $corredor."     ".round($c,2);
        echo "<tr><td>$corredor</td>";
        echo "<td>round($c,2)</td>";
        $url =urlencode($corredor);
        echo "<td><a href='destalles.php?corredor=$url'>Detalles</a></td>";
        echo "</tr>";

      }

    ?>

  </body>
</html>
