<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="params.css">
    <title>SakilaSearch</title>
    <link rel="shortcut icon" href="Ico_Video_page.png"> <!--Le pongo icono a la pagina -->
    <link rel="stylesheet" href="<?php echo $data['urlbase'];  ?>/view/params.css">
  </head>
  <h1 id="Titulo">BBDD SAKILA</h1>
  <br>
  <body background="fondo_sakila2.png">

    <?php  require_once("busqueda.php"); ?>
    <?php
      if(isset($data['msg'])){
        echo "<div>{$data['msg']}</div>";
      }
    ?>
    <div style='overflow: scroll; height:300px;'>


<table>

    <?php
    foreach ($data['res'] as $row) {

      //echo "<div class='barra'>";

      echo "<tr>";
      echo "<td>".$row['title']."</td>";
      echo "<td>".$row['length']."</td>";
      echo "</tr>";
    }
    ?>

  </table></div>

  </body>
</html>
