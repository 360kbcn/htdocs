<?php
function lista_alfabeto($peli, $alfabeto){
  $array = $alfabeto;
  $texto ="<select name='$peli' id='$peli'>";
  for ($i=0; $i<sizeof($array);$i++){
    $texto .="<option value='$i'>".$array[$i]. '</option>';
  }
  $texto.='</select>';
  return $texto;
}
 ?>
