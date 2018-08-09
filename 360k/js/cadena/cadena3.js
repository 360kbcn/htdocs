function procesar() {
  var cadena = document.getElementById('cadena').value;
  var div=document.getElementById('resultado');
  var resultado = "";
  resultado=cadena.replace(/ /g,"");
  div.innerHTML=resultado;
}
