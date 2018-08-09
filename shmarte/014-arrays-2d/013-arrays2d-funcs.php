<?php
function showArrayAsTable($arr){
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

function sumaArray2D($arr){
  $s=0;
  for($i=0; $i<count($arr); $i++){
    for($j=0; $j<count($arr[$i]); $j++){
      $s+=$arr[$i][$j];
    }
  }
  return $s;
}

function cuentaParesArray2D($arr){
  $pares=0;
  for($i=0; $i<count($arr); $i++){
    for($j=0; $j<count($arr[$i]); $j++){
      if($arr[$i][$j]%2==0) $pares++;
    }
  }
  return $pares;
}


function suma2Arrays2D($a, $b){
  $c=[];
  for($i=0; $i<count($a); $i++){
    $c[$i]=[];
    for($j=0; $j<count($a[$i]); $j++){
      $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
    }
  }
  return $c;
}
?>
