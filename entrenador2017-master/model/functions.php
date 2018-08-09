<?php 
function generarTituloParaUrl($string){

	$string= utf8_decode($string);
    $string = str_replace(' ', '-', $string);
    $string = str_replace('?', '', $string);
    $string = str_replace('+', '', $string);
    $string = str_replace(':', '', $string);
    $string = str_replace('??', '', $string);
    $string = str_replace('`', '', $string);
    $string = str_replace('!', '', $string);
    $string = str_replace('¿', '', $string);
    $originals = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ??';
    $modificades = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyrr';
    $string = strtr($string, utf8_decode($originals), $modificades);
   
    return $string;
}
?>