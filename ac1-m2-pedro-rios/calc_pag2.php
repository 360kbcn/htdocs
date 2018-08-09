
<?php
// nota para mi libreria -pagina calc_pag2.php -
require_once("calc.php");
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Calc.Simple</title>
    <link rel="stylesheet" href="propiedades.css">
  </head>
  <body>
    <h1 id="calc1_h1">Calculadora</h1>
    <form class="" action="" method="get">
    <p id="calc1_par1">Inserta una cadena de numeros Ejemplo +3-5+9+6-4</p>
    <p id="calc1_par1">
      <input type="text" name="Num" value="" autofocus"autofocus" required>
      <button id="calc1_btn2"type="submit">Calcula</button>
    </p>
    </form>
    <?php
    $val ="";
        if(isset($_GET['Num'])) $val = $_GET['Num'];
        $valor = Calculadora($val);
        echo "<p id=calc1_par1><strong>".$valor."</strong></p>";
    ?>
    <p id="calc1_par1">
      <a href="index.html"><button id="calc2_btn2"type="submit">Pagina Principal</button></a>
    </p>

  </body>
</html>
