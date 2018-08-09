<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>primerphp</title>
    </head>
    <body>
        <h1>Primer php</h1>
        <form method="post" action="primerphp.php">
            <label for="n">nombre</label>
            <input type="text" id="n" name="nom">
            <input type="submit">
        </form>
        <?php
            $nombre = "anónimo";
            if(isset($_GET['nom']) && $_GET['nom']!=""){
                $nombre = $_GET['nom'];
            }
            
            echo "<p>Hola ".$nombre."</p>";
            echo '<p>Hola '.$nombre.'</p>';
            echo "<p>Hola $nombre</p>";
            echo "<p>Hola $nombrehh</p>";
            echo "<p>Hola ${nombre}hh</p>";
            echo '<p>Hola $nombre</p>';
            echo <<<xxx
<p>hola $nombre en cadena rara</p>
xxx;
        ?>
    </body>
</html>