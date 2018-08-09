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
