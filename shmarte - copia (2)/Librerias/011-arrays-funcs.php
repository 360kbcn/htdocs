<?php
function showArrayAsTable($arr){
  echo "<table><tr>";
  for($i=0; $i<count($arr); $i++){
    echo "<th>".$i."</th>";
  }
  echo "</tr><tr>";
  for($i=0; $i<count($arr); $i++){
    echo "<td>".$arr[$i]."</td>";
  }
  echo "</tr></table>";
}

function sumaArray($arr){
  $s=0;
  for($i=0; $i<count($arr); $i++){
    $s+=$arr[$i];
  }
  return $s;
}

function cuentaImparesArray($arr){
  $impares=0;
  for($i=0; $i<count($arr); $i++){
    if($arr[$i]%2!=0) $impares++;
  }
  return $impares;
}

function isOrdenado($arr){
  $ordenado = true;
  $i=1;
  while($ordenado && $i<count($arr)){
    $ordenado = $arr[$i-1]<=$arr[$i];
    $i++;
  }
  return $ordenado;
}

function sumaArrays($arr1, $arr2){
  $sum = [];
  for($i=0; $i<count($arr1); $i++){
    $sum[$i] = $arr1[$i]+$arr2[$i];
  }
  return $sum;
}


function productoArrayPorEscalar(&$arr, $esc){
  for($i=0; $i<count($arr); $i++){
    $arr[$i] *= $esc;
  }
}


?>
