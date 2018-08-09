function comporbarValor(){
  var numero1 = document.querySelector("input[name='num1']");
  var numero2 = document.querySelector("input[name='num2']");
  var resultado=document.getElementById('resultado');
  if (numero1.value>numero2.value){
    resultado.innerHTML=numero1.value;
  }else{
    resultado.innerHTML=numero2.value;
  }
}
