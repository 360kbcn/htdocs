<?php
function contarEspacios($str){
  $contador = 0;
  for ($i=0; $i < strlen($str); $i++) {
    if($str[$i] == " ") $contador++;
  }
  return $contador;
}

function contarNoEspacios($str){
  return strlen($str)-contarEspacios($str);
}

function primeraMayus($str){
  if(strlen($str)==0) return "";
  $out = strtoupper($str[0]);
  for ($i=1; $i < strlen($str); $i++) {
    if($str[$i-1]==" ") $out .= strtoupper($str[$i]);
    else $out .= strtolower($str[$i]);
  }
  return $out;
}

function capIcua($str){
  for($i=0, $j=strlen($str)-1; $i<$j; $i++, $j--){
    if($str[$i]!=$str[$j]) return false;
  }
  return true;
}

function tabuNO($str){
  return str_ireplace("NO", "(----)", $str);
}
?>
