function procesar() {
  var cadena = document.getElementById('cadena').value;
  var div=document.getElementById('resultado');
  var resultado = "";
  var c = 0;
  for (var i=0;i<cadena.length;i++){
    
      if (cadena.charAt(i) === " ")   {
        c++;
      }
  }
  div.innerHTML=c;
}
