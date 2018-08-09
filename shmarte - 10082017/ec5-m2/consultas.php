<?php
require_once('conexion.php');


function listado($str){
  global $mysql360;
  $nom_lista=$str;
  if ($nom_lista==""){
    $consql = "select * from personas";
  }else{
  $consql =  "select * from personas where nombre like '%$nom_lista%' or email like '%$nom_lista%';";
}
  $resultado = $mysql360->query($consql);
  if(!$resultado) return $mysql360->errorInfo()[2];
  return $resultado->fetchAll();
}

  function New_Alta($str1, $str2){
  global $mysql360;
  $Nuevo_Nombre=$str1;
  $Nuevo_Email=$str2;
    $sqlcontact = "insert into personas(nombre, email) values ('$Nuevo_Nombre', '$Nuevo_Email');";
    $resul = $mysql360->exec($sqlcontact);
    if($resul==1){
      echo "<p id=Alerta>No se ha podido insertar datos en la tabla contactos</p>";
      echo"<br>";
      echo "<p>".$mysql360->errorInfo()[2]."</p>";
    }else{
      echo "<p id=Bien>Datos Insertados en Contactos con Exito</p>";
      echo"<br>";
    }
  }
  return;

  function borrar($str){
    global $mysql360;
    $del_id=$str;
    $sqlcontact = "DELETE from personas where id=$del_id";
    $resul = $mysql360->exec($sqlcontact);
  }
  return;
 ?>
