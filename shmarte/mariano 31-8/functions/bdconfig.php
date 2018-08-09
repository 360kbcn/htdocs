<?php

function newDataBase() {
  try{
    $con = new PDO("mysql:host=localhost","root");
  }catch(PDOException $e){
    echo "<p class='bg-danger'>Error:".$e->getMessage()."</p>";
    echo "</body></html>";
    die();
  }

  return $con;
}

function dbConection() {
  try{
    $con = new PDO("mysql:host=localhost; dbname=mms","root");
  }catch(PDOException $e){
    echo "<p class='bg-danger'>Error:".$e->getMessage()."</p>";
  }

  return $con;
}

/*function dbaccess(){

  $sql = "use mms;";
  $res = $con->exec($sql);
  if($res===false){
    echo "<p class='bg-danger'> No se ha podido conectar con la base de datos</p>";
    echo "<p class='bg-danger'>".$con->errorInfo()[2]."</p>";
     return $res;

  }
}*/
