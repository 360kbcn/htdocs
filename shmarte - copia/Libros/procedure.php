<?php

function datos($str){

global $libros;

$libros = file('libros.txt');

//print_r($libros);

for ($i=0; $i < 5; $i++) {
  echo "<br>";
}

return $libros;

}

?>

<?php
function titulos($str2){

$val=datos($str2);

print_r($val);

$tl_libro = array_column($val, 'título'); // he encontrado esta sentencia array_column qye me permite crear un array con el titulo de los libros

    for ($i=0; $i < 5; $i++) {
      echo "<br>";
    }

print_r($tl_libro);

return ($tl_libro);
}
 ?>
