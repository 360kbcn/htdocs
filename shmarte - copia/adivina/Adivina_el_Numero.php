<html>   <head>
     <title>Ejemplo de numeros aleatorios</title>
    </head>
  <body>
    Adivina el numero.
    <form method="post" action="">

     <br>Ingrese Numero<br>
     <input type="text" name="numero">
      <br>
   <input type="submit" value="calcular">
 </form>

<?php

//Variable que genera los numeros aleatorios
$numeroAleatorio = rand(0,100);

if($_REQUEST['numero']!=""){
 //Comparando
if ($_REQUEST['numero']=="".$numeroAleatorio){

 echo "<h2>Felicidades as acertado</h2>";

}     else
{
echo "<h2>Incorrecto el valor del numero era: </h2>".$numeroAleatorio;
}

  }
  else
  {
  echo "<h2>Introdusca numero</h2>";
  }
 ?>

 </body>
</html>
