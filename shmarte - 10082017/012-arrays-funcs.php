<?php
function showArrayAsTable($arr){
  echo "<table><tr>";
  foreach($arr as $c => $v){
    echo "<th>".$c."</th>";
  }
  echo "</tr><tr>";
  foreach($arr as $v){
    echo "<td>".$v."</td>";
  }
  echo "</tr></table>";
}


function barChart($dat){
  echo "<table id='diagrama'>";

  foreach ($dat as $k => $v) {
    echo "<tr><th>$k</th><td>".barra('*', $v)."</td></tr>";
  }
  echo "</table>";
}

function barra($car, $count){
  $lin = "";
  for($i=0; $i<$count; $i++){
    $lin .= $car;
  }
  return $lin;
}
?>
