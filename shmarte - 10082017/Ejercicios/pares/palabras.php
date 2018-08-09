<!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>Palabras</title>
   </head>
   <body>
     <h1> Introduce una cedena de palabras </h1>
     <form class="" action="" method="get">
        <input type="text" name="cadena" value="0">
        <input type="submit">
     </form>
     <?php
     $cadena ="";
     if (isset($_GET['cadena']) && $_GET['cadena']!="")
     $array_pasamos = $_GET['cadena'];
     $resul = espacios($array_pasamos);
     echo "<p>cadena ".$resul."</p>"
      ?>

   </body>
 </html>

 <?php
function espacios($str){
$valor_cadena= "";
for ($i=0;$i<strlen($str);$i++){
  $valor_cadena = $str[$i] + " ";
}
}
return $valor_cadena;
  ?>
