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
    <div style='overflow: scroll; height:400px;'>
  <form class="" action="" method="post">
<table>



    <?php
    foreach ($data['res'] as $row) {
      echo "<tr>";
      echo "<td class='nav1'>".$row['title']."</td>";
      echo "<td class='nav2'>".$row['length']."</td>";
      echo "<td>"."<a title ='Consultar_Registro' href='?peli=".$row['film_id']."'><img src='view/data.png'>"."</a>";
      echo "</tr>";
    }
    ?>


  </table>
  </form>
</div>

  </body>
</html>
