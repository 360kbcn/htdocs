<?php
require_once("libros.php"); // Requiere de la matriz libros
 ?>

 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Libros</title>
    <link rel="stylesheet" href="preferens.css">
  </head>
  <body>

    <header>
      <h1 id="h1">Libros de Interes General</h1>
    </header>

    <nav>
      <h2 id="title2">Lista de Libros</h2>
      <p><br></p>

      <ul>
      <?php
        $titulos ="";
        $posicion = "";
        $Lista_titulos = titulos($titulos); //Solicitamos los titulos al procedimiento titulos
        for ($i=0; $i<count($Lista_titulos) ; $i++) {
          $posicion=$i;
          echo "<li><a href='?pos=$posicion'>$Lista_titulos[$i]</a></li>"; // Pintamos los titulos de los libros en una lista
        }

       ?>
      </ul>
    </nav>

    <main>
        <section id="seccion">
          <?php
          $cuerpo = 0;
          if (isset($_GET['pos'])) $cuerpo = $_GET['pos'];
          $recibo = libro($cuerpo); // Solicitamos los datos del libro segun la posicion donde se ha echo click
            echo "<h2 id='h2'>".$recibo['título']."</h2>"; // pinto por pantalla los datos del libro seleccionado.
            if(empty($recibo['autor'])){ // Miro que si al devolverme los datos resumen esta vacio salga un mensaje diciendo no hay datos
              echo "<p>No hay datos del Autor</p>";
            }else{
            echo "<p>".$recibo['autor']."</p>";
            }
            if (empty($recibo['genero'])) {
              echo "<p>No hay datos del Genero</p>";
            }else{
              echo "<p>".$recibo['genero']."</p>";
            }
            if (empty($recibo['resumen'])){
                echo "<p>No hay Resumen</p>";
            }else{
               echo "<p>".$recibo['resumen']."</p>";
          }
          ?>

        </section>

    </main>
    <footer>
      <p>
        <button id="index_pie" type="text" >P.Rios</button>
      </p>
    </footer>

  </body>
</html>
