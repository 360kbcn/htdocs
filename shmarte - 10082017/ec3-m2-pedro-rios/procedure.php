<?php
function aleatorio(){
  $resul_ale = rand(1,100);
  return $resul_ale;

}

function dead(){
  header('location:index.php');
  $_SESSION = []; // vacio array session
  session_destroy(); // finalizo session
  return;
}
 ?>
