
    <?php

      try {
          $mysql360 = new PDO("mysql:host=localhost", "root");
          // Se establece la conexion con la BBDD contactos con los parametro especificados en config
      } catch (PDOException $e) {
          echo "<p class ='error'Error>".$e->getMessage();
          exit();

    }
     ?>
     <!DOCTYPE html>
     <html>
       <head>
         <meta charset="utf-8">
         <title></title>
       </head>
       <?php
       $sqlddbb = "use editados;";
       // yo he llamado a mi base de datos editamos
       // lo siento
       $resul=$mysql360->exec($sqlddbb);
        ?>
       <body>
         <form action="" method="get">
         introduce el ISBM <input type="text" name="isbm" value="">
         <input type="submit" name="Buscar" value="Buscar">
         <?php
          if(isset($_GET['Buscar'])){
          $datos_libro=($_GET['isbm']);
          }
          $sqlConsulta= "SELECT titulo, autor, sipnopsi FROM libro WHERE isbn=$datos_libro";
          $resul=$mysql360->query($sqlConsulta);
          foreach ($resul as $row) {
            echo $row['titulo'];
            echo $row['autor'];
            echo $row['sipnopsi'];
          }
          ?>
         </form>
       </body>
     </html>
