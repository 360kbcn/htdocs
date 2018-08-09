<?php
require_once('conexion.php');
function listado(){
  $consultalistado="SELECT * FROM contactos";
  $lst_datos=$mysql->query($consultalistado);
  return $lst_datos;
}
 ?>
