<?php
$conexion = new PDO("mysql:host=localhost;dbname=world","root");
function countryData($country){
  global $conexion;
  $mysql ="select * from country where name='$country';";
  echo "<pstyle ='boder:1px' solid;paddin 5px;>$mysql</p>";
  $respuesta = $conexion->query($mysql);
  if($respuesta) return $respuesta->fetch();
  return [];
}

function countryDataPrepared($country){
  global $conexion;
  $sql = $conexion->prepare("select * from country where name= :country;");
  $sql->bindvalue(':country', $country);
  $sql->execute();
  $res=$sql->fetch();
  if($res) return $res;
  return [];
}
 ?>
