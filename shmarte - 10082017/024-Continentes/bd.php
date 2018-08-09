<?php
  require_once("config.php");

  try{
    $bdcon = new PDO("mysql:host=$bd_url; dbname=$bd_name", $bd_user, $bd_password);
  }catch(PDOException $e){
    $bdcon = null;
  }

  function getContinentes(){
    global $bdcon;
    if(!$bdcon) return [];
    $sql = "select distinct continent from country;";
    $res = $bdcon->query($sql);
    if($res) return $res->fetchAll();
    else return [];
  }


  function getPaisesDelContinente($continente){
    global $bdcon;
    if(!$bdcon) return [];
    $sql = "select name, population from country where continent='$continente';";
    $res = $bdcon->query($sql);
    if($res) return $res->fetchAll();
    else return [];
  }
?>
