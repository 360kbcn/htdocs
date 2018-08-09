<?php

require_once('conexion.php');

 ?>

 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="params.css">
     <title>Contactos</title>
   </head>
   <h1 id="Titulo">BBDD Contactos</h1>
   <br>
   <form action="" method="get">
     <p size="18"><strong>Introduce un Nombre :</strong></p><input type ="Text" name="nombre"><br>
     <br>
     <input title="Search" alt="Search" src="lupa.png" type="image" name="dale" >
  <!-- <input type="image" name="dale" > -->
   </form>
   <form class="" method="get">
     <input aling="right" title="Alta" alt="Alta" src="alta.png" type="image" name="Alta">
     <?php
      if(isset($_GET['Alta'])){
      //  header('location:alta.php');
      }
      ?>


   </form>
   <body background="fondo360.png">
   <?php
   $nom_search = "";
   if(isset($_GET['dale'])){
     $nom_search=$_GET['nombre'];
   }
   if ($nom_search===""){
     $nom_search="*";
     $sql = "select * from personas;";
     $resultado = $mysql360->query($sql);
   }else{
     $sql = "select nombre, email from personas WHERE nombre=".$nom_search.";";
     $resultado = $mysql360->query($sql);  // Error me devuelve false
   }
    ?>
    <main>
        <table>
        <thead>
        <tr>
        <td>Nombre</td>
        <td>Email</td>
      </tr>
    <?php
    foreach ($resultado as $row) {
          echo "<tr>";
          echo "<td>".$row['nombre']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "</tr>";
       };
    ?>
    </table>
    </main>
   </body>
 </html>
