<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $data['urlbase'];  ?>/view/params.css">
    <title>SakilaSearch</title>
    <link rel="shortcut icon" href="Ico_Video_page.png"> <!--Le pongo icono a la pagina -->

  </head>
  <h1 id="Titulo">DATOS PELICULA</h1>
  <br>
  <body background="fondo_sakila2.png">

    <?php
      echo "<p id='Lot2'>".$data['arrayPelicula']['titulo']."</p>";
      //echo "<p style='text-align:left;color:black;font-size:40px;padding: 0px 30px 0px 100px;'>Año de Producción:<span style='font-size:30px;padding: 0px 30px 0px 40px;'>".$data['arrayPelicula']['Produccion']."</span></p>";

      echo "<p id='Lot3'style='padding: 0px 30px 0px 150px;'>Año de Producción:<span id='Lot4'style='padding: 0px 0px 0px 20px;'>".$data['arrayPelicula']['Produccion']."</span>"."<span id='Lot3'style='padding: 0px 30px 0px 150px;'>Duraccion:<span id='Lot4'style='padding: 0px 0px 0px 20px;'>".$data['arrayPelicula']['Duracion']."</span></p>";

      echo "<p id='Lot3'style='padding: 0px 30px 0px 150px;'>Idioma:<span id='Lot4'style='padding: 0px 0px 0px 20px;'>".$data['arrayPelicula']['Idioma']."</span>"."<span id='Lot3'style='padding: 0px 30px 0px 335px;'>Categoria:<span id='Lot4'style='padding: 0px 0px 0px 20px;'>".$data['arrayPelicula']['Categoria']."</span></p>";

      echo "<p id='Lot3'style='padding: 0px 30px 0px 150px;'>Sinopsis:<span id='Lot4'style='padding: 0px 0px 0px 20px;'>".$data['arrayPelicula']['Sinopsis']."</span></p>";

       echo "<p id='Lot3'style='padding: 0px 30px 0px 550px;'>Actores:</p>";
       echo "<p id='Lot3'style='padding: 0px 30px 0px 250px;'>Nombre:<span id='Lot3'style='padding: 0px 0px 0px 450px;'>Apellido:</span></p>";




    ?>

      <div style='overflow: scroll; height:100px;'>

      <table>
        <thead>
    <?php
      foreach ($data['arrayActores'] as $row) {

      //  echo "<p id='Lot5' style='padding: 0px 0px 0px 275px;'>".$row['Nombre_Actor']."<span id='Lot5' style='padding: 0px 0px 0px 600px;'>".$row['Apellido_Actor']."</span></p>";

      echo "<tr>";
      echo "<td id='Lot5'>".$row['Nombre_Actor']."</td>";
      echo "<td id='Lot5'>".$row['Apellido_Actor']."</td>";
      }
     ?>
   </thead>
   </table>
   </div>
   <br>
   <a title ='Pagina de Busqueda' href='<?php echo $data['urlbase']; ?>'><img src='view/aspa_roja.png'></a>

  </body>
</html>
