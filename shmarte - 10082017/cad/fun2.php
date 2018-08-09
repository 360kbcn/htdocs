<?php
function proceso($cad){  
$r = eval('return '.$cad.';');
echo "RESULTADO -> " . $r;
}
 ?>
