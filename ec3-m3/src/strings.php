<?php

/**
* funciones
*
* @author 360k <360k.cat@gmail.com>
* @license AGPL
*/
namespace Lib\strings;

/**
*
*Cadena "<->" en medio en un cojunto de caracteres.
*
*Recivimos una $cadena, y tenemos que comprobar si la siguiente serie "<->",
*aparece en medio. Se considerará que está en medio si el número de caracteres que hay
*antes y después difieren como mucho en una unidad. devolverenos TRUE de lo contrario FALSE.
*
*@example Secuencia ('asd<->asd').
*
*
*Se comprueba si <-> estan en medio.
*
*Si es que no se devolvera False
*
*De lo contrario se comprobara si a los lados se encuentra <>
*
*Si alguno de estos dos elementos no estuviera en la posicion correcta se devolveria False
*
*si no devolvera TRUE.
*
*Tambien se considera que esta en medio cuando sea una posicion menos y mas
*por la posibilidad de que el medio pudiera ser impar.
*
*@param string $cadena donde recibimos la cadena string.
*
*@return boolean devuelve un True si es correcto y False si no se comple la condición.
*
*/
function flechaMedio($cadena){

// TODO Resto documentar.


    return false;
}
?>
