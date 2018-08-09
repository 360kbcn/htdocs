<!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>Palabras</title>
   </head>
   <body>
     <h1> Introduce una cedena de palabras </h1>
     <form class="" action="" method="get">
        <input type="text" name="cadena">
        <input type="submit">
     </form>
     <?php
     $cadena2 ="";
     if (isset($_GET['cadena']) && $_GET['cadena']!="")
     $cadena2 = $_GET['cadena'];
     $tres = 0;
//     $tres = strlen($cadena2);
//     if ($tres>3){
        $resul = espacios($cadena2);
//     }else{
//       echo "<p>La cadena tiene que se mayor de tres caracteres</p>"
//     }
     echo "<p>cadena ".$resul."</p>";
      ?>

   </body>
 </html>

 <?php
 
function espacios($str){
$valor_cadena= "";
$tres =strlen($str);
if ($tres < 3){
  $valor_cadena = "Tienes que poner mas de 3 caracteres";
}else{
for ($i=0;$i<strlen($str);$i++){
  $valor_cadena = $valor_cadena.$str[$i]." ";
}
}
return $valor_cadena;
}

  ?>
