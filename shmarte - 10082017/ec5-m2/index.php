<?php
require_once('conexion.php');
require_once('consultas.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="params.css">
    <title>BBDD Contactos</title>
  </head>
  <h1 id="Titulo">BBDD Contactos</h1>
  <body background="fondo360.png">
    <form action="" method="get">
    <p size="18"><strong>Introduce un Nombre :</strong></p><input type ="Text" name="nombre"><br>
    <br>
    <input aling="right" title="Search" alt="Search" src="lupa.png" type="image" name="dale" >

  </form>
    <a class ="derecha"title="Alta Contactos"href="?AddDato=1"><img src="ico_Alta.png"></a>
    <?php
    if(isset($_GET['Eliminar'])){
      borrar($_GET['Eliminar']);
    }
    if(isset($_GET['nombre'])){
      $nom_search=$_GET['nombre'];
      $datos_ddbb=listado($_GET['nombre']);
    }else{
      $datos_ddbb=listado("");
    }
    if(isset($_GET['AddDato'])){
      ?>
    <div id="flotante">
    <a class ="derecha" title ="Cerrar"href="index.php"><img src="aspa_roja.png"></a>
    <h2 color ="red" ><strong>Nuevo Contacto</strong></h2>
    <br>
    <form action="" method="post">
    <p>Introduce un Nombre </p color ="white"><input type="text" name="New_Contact" value="">
    <p>Introduce un Email  </p color ="white"><input type="text" name="New_Email" value="">
    <br>
    <br>
    <input type="submit" name="Alta" value="Alta Nueva">
    <br>
    <br>
  </form>
    </div>
    <?php
}
    if(isset($_POST['Alta'])){
      $datos_db=New_Alta($_POST['New_Contact'],$_POST['New_Email']);
      header("location:index.php");
    }
      ?>
     <main>
       <table>
         <thead>
           <tr>
             <td id="td1"><strong>Nombre</strong></td>
             <td id="td1"><strong>Email</strong></td>
           </tr>
           <form class="" action="index.html" method="post">
           <?php
            foreach ($datos_ddbb as $row) {
              echo "<tr>";
              echo "<td>".$row['nombre']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>"."<a class ='derecha' title ='Borrar_Registro'href='?Eliminar=".$row['id']."'><img src='paper1.png'>"."</a>";
            };

            ?>
         </thead>
       </table>
     </main>
  </body>
</html>
