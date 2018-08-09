<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Subir ficheros al servidor</title>
  </head>
  <body>

    <h1>Subir ficheros al servidor</h1>

    <form class="" action="" method="post" enctype="multipart/form-data">
      <input type="file" name="fichero" >
      <button type="submit">Subir Archivo</button>
      <br>
      <p>Pulsa para ver el directorio <a href="http://localhost/shmarte/Subir_Ficheros_AlServidor/archivos/">Pulsa</a></p>

    </form>

    <?php
    if (isset($_FILES['fichero'])){
      $archivo = "archivos/".$_FILES['fichero']['name'];

      if (move_uploaded_file($_FILES['fichero']['tmp_name'], $archivo)){
          echo "<p>archivo subido correctamente</p>";
      }else {
          echo "<p>Erro al subir el archivo</p>";
      }
    }

     ?>
     <table border="1">
     <thead>
       Encabezado
     </thead>
     <tbody>
       <tr>
         <th>Name</th><th>Tipo</th>
       </tr>
       <?php
       foreach ($_FILES['fichero'] as $prop => $valor) {

         echo "<tr><th>$prop</th><td>$valor</td></tr>";
       }

       $kbytes =$_FILES['fichero']['size']/1024;
       $kbytes = number_format($kbytes, 2);

        echo "<tr><th>Tamaño en kbytes</th><td>${kbytes} kbytes</td></tr>";

       $tipo =explode("/",$_FILES['fichero']['type']);

       if($tipo[0]=="image"){
         echo "<img src='$archivo' width='100'>";
       }else{
         echo "<a href='$archivo'>".$_FILES['fichero']['name']."</a>";

       }
      ?>

     </tbody>
    </table>




  </body>
</html>
