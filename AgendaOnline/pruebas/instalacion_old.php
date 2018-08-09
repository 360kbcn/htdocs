<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="params.css">
    <title>Creador BBDD Contactos</title>
  </head>
  <body>
    <div class="contenedor">
      <p >Pulsa una tecla para empezar la instalación.</p>
      <p id="parrafo1">Estableciendo conexion con el Servidor .<span id="span1">&#160;</span></p>
      <br>
    </div>
    <?php
    // Estable conexion con el servidor
    try {
      $val  = new PDO("mysql:host=localhost","root");
    } catch (PDOException $e) {
      echo "<p class='error'>Error:".$e->getMessage();
      echo "</body></html>";
      exit();
    }
     ?>
     <div class="contenedor">
       <p id="parrafo1">Conexion Establecida.<span id="span1">&#160;</span></p>
     </div>
  </body>
  <script type="text/javascript" src="codigojs.js">

  </script>
</html>
