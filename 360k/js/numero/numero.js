function resultado(){
  var num1 = document.getElementById('num1').value;
  var num2 = document.getElementById('num2').value;
  numero3 = suma(num1, num2);
  document.getElementById('resul').value=Number(numero3);
}

function suma(num1, num2){
  var numero3 = Number(num1)+Number(num2);
  return numero3;
}
