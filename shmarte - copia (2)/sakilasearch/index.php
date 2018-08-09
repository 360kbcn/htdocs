<?php
require_once('funciones.php'); // requerimos del fichero funciones
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="params.css">
    <title>SakilaSearch</title>
    <link rel="shortcut icon" href="Ico_Video_page.png"> <!--Le pongo icono a la pagina -->
  </head>
  <h1 id="Titulo">BBDD SAKILA</h1>
  <br>
  <body background="fondo_sakila2.png">
      <h2 id="Titulo2">OPCIONES DE BUSQUEDA</h2>
  <div class="topbar-menu">
  <p class="margenes2 enunciados margenes">Peliculas</p>
  <select class="Selec margenes" name="Peliculas">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
          <option value="G">G</option>
          <option value="H">H</option>
          <option value="I">I</option>
          <option value="J">J</option>
          <option value="K">K</option>
          <option value="L">L</option>
          <option value="M">M</option>
          <option value="N">N</option>
          <option value="O">O</option>
          <option value="P">P</option>
          <option value="Q">Q</option>
          <option value="R">R</option>
          <option value="S">S</option>
          <option value="T">T</option>
          <option value="U">U</option>
          <option value="V">V</option>
          <option value="W">W</option>
          <option value="X">X</option>
          <option value="Y">Y</option>
          <option value="Z">Z</option>
          <option value=""selected="selected">Todas</option>
          </select>
          <p class="enunciados margenes">Minutos Max/Min</p>
          <div class="check margenes">
              Minutos_Min<input type="checkbox" name="Min" value="1">
          </div>
          <div class="check margenes">
              Minutos_Max<input type="checkbox" name="Max" value="2">
          </div>
          <p class="enunciados margenes">Margen Minutos</p>
          <input  class="Min" type="text" name="" value="0">
          <a class ="margenes3"title="Buscar_Datos"href="?AddDato=1"><img src="databases_search.png"></a>
    </div>

  </body>
</html>
