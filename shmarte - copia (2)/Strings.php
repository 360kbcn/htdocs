<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Strings</title>
  </head>
  <body>
    <h1>Strings</h1>
    <?php
      $cad = "+2+3-4";
      $arr =[$cad];
      $resul = 0;
      echo "<p>";

      //for($i=0; $i<strlen($cad); $i++){
        // echo $cad[$i]."*";

        //$valor = intval($cad[$i]);
      //  $valor = strval($cad[$i]);
        // echo gettype($valor); Nos devuelve de que tipo es la variable
        // $resul = $resul+$valor;
        // $resul = $resul + $valor;
        //echo $valor;
        echo count($cad, COUNT_RECURSIVE);


        // echo $resul;
//      }

      echo "</p>";
    ?>
  </body>
</html>
