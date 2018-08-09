<?php
//Creamos el archivo datos.txt
//ponemos tipo 'a' para añadir lineas sin borrar
$val1= "Pedro";
$val2= "Marc";
$val3= "Angeles";
$file=fopen("datos.txt","a") or die("Problemas");
  //vamos añadiendo el contenido
  fputs($file,"\n");
  fputs($file,$val1);
  fputs($file,"\n");
  fputs($file,$val2);
  fputs($file,"\n");
  fputs($file,$val3);
  fclose($file);
  ?>
