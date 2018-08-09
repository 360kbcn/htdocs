<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consumir Api</title>
  </head>
  <body>
    <h1>Consumir API</h1>
    <h2>Titulos de libros</h2>
    <?php
    $url="http://172.27.100.136/oscar/api/libros?campo=titulo";
    $json = file_get_contents($url);
    $datos = json_decode($json);
    echo "<ul>";
    foreach ($datos as $tit) {
      echo "<li>$tit</li>";
    }
    echo"</ul>";
     ?>

     <h2>Generos</h2>
     <?php
     $url="http://172.27.100.136/oscar/api/generos";
     $json = file_get_contents($url);
     $datos = json_decode($json);
     echo "<ul>";
     foreach ($datos as $tit) {
       echo "<li>$tit</li>";
     }
     echo"</ul>";
      ?>

      <h2>Autores de cuento</h2>
      <?php
      $url="http://172.27.100.136/oscar/api/libros?genero=cuento&campo=autor";
      $json = file_get_contents($url);
      $datos = json_decode($json);
      echo "<ul>";
      foreach ($datos as $tit) {
        echo "<li>$tit</li>";
      }
      echo"</ul>";
       ?>

       <h2>Generos</h2>
       <?php
       $url="http://172.27.100.136/oscar/api/generos";
       $json = file_get_contents($url);
       $datos = json_decode($json);
       echo "<ul>";
       foreach ($datos as $tit) {
         echo "<li>$tit</li>";
       }
       echo"</ul>";
        ?>

        <h2>Posicion 3</h2>
        <?php
        $url="http://172.27.100.136/oscar/api/libros/3";
        $json = file_get_contents($url);
        $datos = json_decode($json);
        echo "<ul>";
        foreach ($datos as $c=>$tit) {
          echo "<li>$c -- $tit</li>";
        }
        echo"</ul>";

         ?>

          <h2>Todas las novelas</h2>
          <?php
          $url="http://172.27.100.136/oscar/api/libros?genero=novela";
          $json = file_get_contents($url);
          $datos = json_decode($json);
          echo "<ul>";
          foreach ($datos as $tit) {
            foreach ($tit as $key => $val) {
                echo "<li>$key: $val</li>";
            }


         }
          echo"</ul>";
           ?>

           <h2>Todas los libros</h2>
          <?php
           $url="http://172.27.100.136/oscar/api/libros?campo=titulo";
           $json = file_get_contents($url);
           $datos = json_decode($json);
           echo "<ul>";
           $posicion=0;
           for ($i=0; $i<count($datos) ; $i++) {
             $posicion=$i;
             echo "<li><a href='?pos=$posicion'>$datos[$i]</a></li>";
           }

           echo"</ul>";
            ?>
            <main>
              <?php
              $dat_libros = 0;
              if (isset($_GET['pos'])) $dat_libros = $_GET['pos'];
              $url="http://172.27.100.136/oscar/api/libros/$dat_libros";
              $json = file_get_contents($url);
              $datos = json_decode($json);
              echo "<ul>";
              foreach ($datos as $c=>$tit) {
                echo "<li>$c -- $tit</li>";
              }
              echo"</ul>";

               ?>
            </main>

  </body>
</html>
