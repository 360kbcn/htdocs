<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Columnas filas</title>
  </head>
  <body>
    <?php
    $nfil = 2;
    $ncol = 3;
    $nnum = 2;

    $multiplo=func_multi($nfil, $ncol, $nnum);
     ?>
  </body>
</html>
<?php
  function func_multi($strfil,$strcol, $strnum){

    $counter=-1;

          for ($i=0; $i <$strfil; $i++) {


            for ($j=0; $j<$strcol;  $j++) {

              $counter++;

              $lf = $counter * $strnum;

              $tabla[$i][$j] = $lf;


      }

    }

       print_r ($tabla);

  }
 ?>
