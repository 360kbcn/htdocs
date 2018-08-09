<?php
$fp = fopen("Aleatorio.txt","r");
$ju= fgets($fp);
fclose($fp);
var_dump($ju);
 ?>
