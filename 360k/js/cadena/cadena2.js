function procesar() {
  var cadena = document.getElementById('cadena').value;
  var div=document.getElementById('resultado');
  var longitud = cadena.length;
  var resultado = "";

  while (longitud>=0){
    resultado = resultado + cadena.charAt(longitud);
    longitud--;
  }
  div.innerHTML=resultado;

}
