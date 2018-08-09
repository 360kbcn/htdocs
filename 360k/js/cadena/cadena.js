function procesar() {
  var cadena = document.getElementById('cadena').value;
  var buscar = document.getElementById('buscar').value;
  var resultado = document.getElementById('resultado');
  var pos = cadena.indexOf(buscar);

  cadena=cadena.toLowerCase();
  buscar=buscar.toLowerCase();
  
  resultado.innerHTML = "";
  while (pos!==-1){
    resultado.innerHTML +=pos+"<br/>"
    pos = cadena.indexOf(buscar,pos+1);
  }
}
