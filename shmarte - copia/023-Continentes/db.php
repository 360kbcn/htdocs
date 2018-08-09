<?php
  require_once("config.php");

  try{
    $con = new PDO("mysql:localhost=$db_url; dbname=$db_name", $db_user, $db_password);
  }catch(PDOException $e){
    $con = null;
  }


  function getContinentes(){
    global $con;
    if(!$con) return [];
    $sql = "select distinct continent from country;";
    $res = $con->query($sql);
    if($res) return $res->fetchAll();
    else return[];
  }

?>
