<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Mi primer php</title>
    </head>
  <body>
      <h1> Mi Primer php </h1>
     <form method="get" action="primer.php">
        <label for="n">nombre</label>
        <input type="text" id="n" name="nom">
        <input type="submit">
    </form>
    <?php
        $nombre = "anonimo";
        if (isset($_GET['nom']) && $_GET['nom']!=""){
          $nombre = $_GET['nom'];
      }
      echo "<p>Hola ".$nombre."</p>";
      echo '<p>Hola '.$nombre.'</p>';
      echo "<p>Hola $nombre</p>";
      echo "<p>Hola $nombrehh</p>";
      echo "<p>Hola ${nombre}hh</p>";
      echo '<p>Hola $nombre</p>';
      echo <<<xxx
<p>hola  en cadena rara </p>
xxx;
     ?>
  </body>
</html>
