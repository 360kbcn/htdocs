/*Recorrer un Array*/
$('ol li').each(function() {
  var listado=$(this);
  console.log("los elementos de las lista "+listado.text());

});

/*Pintar Array en pantalla*/
var a=[1,2,3,4,5,6,7,8,9,11,12,13];
$("#resul").text(a.join(','));

/*Filtrar elemento de un  array quita todo lo que esta
dentro de Boolean*/
var a=[1,2,0,"a",null,NaN,undefined,7,"","palabras"];
Boolean[NaN]; // devuelve false
Boolean[undefined]; // devuelve false
Boolean[null]; // devuelve false
Boolean[1]; // devuelve true
var b=a.filter(Boolean);
$("#resul2").text(b.join(','));


function mayorQueCinco(elemento,indice){
  return (elemento >= 5); // devuelve valores iguales o mayores a 5
}

var a=[1,12,3,4,5,6,7,8,9,10];
a = jQuery.grep(a,mayorQueCinco);
$("#resul3").text(a.join(", ")); // Los devuelve como estan en la lista


var cadena = "        Hola como estas  ";
$("#resul4").text(cadena.trim());

var cadena = "Hola como estas Nen";
$("#resul5").text(cadena.replace("o","a"));
