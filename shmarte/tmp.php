<?php

function showArrayAsTable($arr){
  if(!is_array($arr[0])) $arr = [$arr];
  echo "<table>";
  //indices de columnas
  echo "<tr><th></th>";
  for($i=0; $i<count($arr[0]); $i++){
    echo "<th>$i</th>";
  }
  echo "</tr>";

  //datos y indices de fila
  for($i=0; $i<count($arr); $i++){
    echo "<tr>";
    echo "<th>$i</th>"; //indice de fila
    for($j=0; $j<count($arr[$i]); $j++){
      echo "<td>".$arr[$i][$j]."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}

function sumaFilasArray($arr){
  $sums = [];
  for($i=0; $i<count($arr); $i++){
    $sums[$i] = 0;
    for($j=0; $j<count($arr[$i]); $j++){
      $sums[$i] += $arr[$i][$j];
    }
  }
  return $sums;
}


function sumaColumnasArray($arr){
  $sums = [];
  for($i=0; $i<count($arr); $i++){
    for($j=0; $j<count($arr[$i]); $j++){
      $sums[$j] += $arr[$i][$j];
    }
  }
  return $sums;
}
?>
