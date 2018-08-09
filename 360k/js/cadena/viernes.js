function procesar(){
var fecha = var Date();
var resultado = document.getElementById('resultado');
if (fecha.getDay() === 4){
  resultado.innerHTML = "¡por fin es viernes!";
}else{
  resultado.innerHTML = "Hoy no es viernes :C";
}
}
