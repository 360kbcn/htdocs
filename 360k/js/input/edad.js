function mostrarValor(){
var edad = document.querySelector("input[name='edad']");
var resultado=document.getElementById('resultado');
if(edad.value>17){
  resultado.innerHTML="Mayor de Edad";
  // alert('Mayor de edad');
}else{
  resultado.innerHTML="Menor de Edad";
  //alert('Menor de edad');
}
}
