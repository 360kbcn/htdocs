<?php
require_once('config.php');

try{
    $bdcon = new PDO("mysql:localhost=$db_url; dbname=$db_name", $db_user, $db_password);
  }catch(PDOException $e){
    $bdcon = null;
  }



function getPeliculas(){

  global $bdcon;
  if (!$bdcon) return [];
  $sql = "SELECT title from film ORDER by title";
  $resul = $bdcon->query($sql);
  if($resul) return $resul->fetchAll();
  else return [];

}

function getPeliculasporletras($movie){
global $bdcon;
if(!$bdcon) return [];
$sql = "SELECT title, description, release_year from film where  title like '$movie%';";
$resul = $bdcon->query($sql);
if($resul) return $resul->fetchAll();
else return[];
}
?>
