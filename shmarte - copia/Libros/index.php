<?php
require_once("libros.php"); // Requiere de la matriz libros
//require_once("procedure.php");
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
        $Lista_titulos = titulos($titulos);
        for ($i=0; $i<count($Lista_titulos) ; $i++) {
          $posicion=$i;
          echo "<li><a href='?pos=$posicion'>$Lista_titulos[$i]</a></li>";
        }

       ?>
      </ul>
    </nav>


    <main>
        <section id="seccion">
          <?php
          $cuerpo = 0;
          if (isset($_GET['pos'])) $cuerpo = $_GET['pos'];
          $recibo = libro($cuerpo);

            echo "<h2 id='h2'>".$recibo['título']."</h2>";
            echo "<p>".$recibo['autor']."</p>";
            echo "<p>".$recibo['genero']."</p>";
            echo "<p>".$recibo['resumen']."</p>";
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
