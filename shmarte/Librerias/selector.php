<?php
$meses = array('enero','febrero','marzo','abril','mayo','junio','julio',
               'agosto','septiembre','octubre','noviembre','diciembre');

echo '<form name="form1" id="form1" method="post" action="">';
$nombre = 'meses';
$resultado = lista($nombre, $meses);
echo $resultado;
echo '</form>';

function lista($nombre, $meses){
	$array = $meses;
	$txt= "<select name='$nombre' id='$nombre'>";

	for ($i=0; $i<sizeof($array); $i++){
	$txt .= "<option value='$i'>". $array[$i] . '</option>';
	}
	$txt .= '</select>';
	return $txt;
}
 ?>
