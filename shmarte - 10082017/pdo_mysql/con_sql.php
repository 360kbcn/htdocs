<?php

function consul($str){
  $user = "root";

  $val_con = array();

  try {
    $con= new PDO("mysql:host=localhost; dbname=world", $user); // tambien se le puede pasar el parametro ,$passw si tenemos password en la base de datos
    // var_dump($con);
  }catch(PDOException $e){
    echo "<p style='color:red;'>".$e->getMessage()."</p>";
    die();
  }

  $sql ="Select continent, Name as Pais, Population as Pobla from country Order by Continent;";
  $res = $con->query($sql);

  while ($datos = mysql_fetch_row($res)) {$val_con[] = $datos;}

  print_r ($val_con);

  return $val_con;

  }

//url
// http://www.lawebdelprogramador.com/foros/PHP/1383871-Consulta-MySQL-en-array-PHP.html


// $val_con = array_column($fila, 'continent');

 ?>
