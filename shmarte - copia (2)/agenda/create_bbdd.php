<?php
session_start();
require_once('procedure.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Crear Bases de Datos</title>
    <link rel="stylesheet" href="params.css">
  </head>
  <table border="1" width="800" align="center">
    <tr>
      <td id="td1">
  <h1 id="titulo" >Generador de BBDD</h1>
</td>
</tr>
  <body>
    <form action="" method="get">
    <tr>
      <td id="td2">
        <h2 id="titulo2">Introduce un Nombre para la base de datos</h2>
        <input id="input1" type="text" name="nom_bbdd">
        <input id="input2" type="submit" name="nomBBDD" value="Generar">
      </td>
    </tr>
    </form>
    <?php
    $nom_bbdd="";
    if(isset($_GET['nomBBDD'])){
      $nom_bbdd=$_SESSION['nom_bbdd'];
      data();
    }
     ?>
  </body>
</html>
