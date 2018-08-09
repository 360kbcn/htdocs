<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ordena nums</title>
  </head>
  <body>
    <h1>Ordena nums<h1>
      <form method="get" acction="">
        <input type="number" name="n1" value="0">
        <input type="number" name="n2" value="0">
        <input type="number" name="n3" value="0">
        <input type="submit" value="ordena">
      </form>
      <?php
        // obtener datos
        $n1=0;
        $n2=0;
        $n3=0;

        if (isset($_GET['n1']) && $_GET['n1']!="")
              $n1 = $_GET['n1'];
        if (isset($_GET['n2']) && $_GET['n2']!="")
              $n2 = $_GET['n2'];
        if (isset($_GET['n3']) && $_GET['n3']!="")
              $n3 = $_GET['n3'];

        // Ordenacion

        if($n2<$n1){
            $aux = $n1;
            $n1 = $n2;
            $n2 = $aux;
        }

        if($n3<$n1){
            $aux = $n1;
            $n1 = $n3;
            $n3 = $aux;
        }

        if($n3<$n2){
            $aux = $n2;
            $n2 = $n3;
            $n3 = $aux;
        }


       // visualizacion resultados

       if (isset($_GET['n1']))
        echo <<<fin
        <ul>
          <li>$n1</li>
          <li>$n2</li>
          <li>$n3</li>
        <ul>
fin;

       ?>
  </body>
</html>
