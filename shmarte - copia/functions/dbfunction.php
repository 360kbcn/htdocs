<?php
  require_once "bdconfig.php";

function insertarDatos(){
    //conectar con base de datos
    $con = dbConection();

        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $imgurl = $_POST['imgurl'];
        $sinopsis = $_POST['sinopsis'];


      $titurl = urldecode($titulo);
      $genurl = urlencode($genero);

          /* insertar datos */
          $sql = "insert into genero (genero, genero_url) values
            ('$genero', '$genurl');";

            $res = $con->exec($sql);
        /*    if($res===false){
              echo "<div class=''><p>No se han podido insertar los datos.</p><p>".$con->errorInfo()[2]."</p></div>";

            }else{
              echo "<div class=''><p>Genero añadido correctamente.</p></div>";

            }*/

        $sql = "SELECT id FROM genero WHERE genero = '$genero';";

                $res = $con->query($sql);

        $sql = "insert into serie (titulo, titulo_url, imagen, sinopsis, genero) values
        ('$titulo', '$titurl', '$imgurl', '$sinopsis', {$res->fetch()['id']});";

        $res = $con->exec($sql);
        if($res===false){
          echo "<div class=''><p>No se han podido insertar los datos.</p><p>".$con->errorInfo()[2]."</p></div>";

        }else{
          echo "<div class=''><p>Pelicula añadida  correctamente.</p></div>";

        }
      }

      function modificarDatos(){



      }

      function borrarDatos(){

          

      }

 ?>
