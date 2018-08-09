function pasos(numero){
  var contador =0;
  while (numero !==1){
    if(numero % 2 === 0){
      // es par
      numero = numero / 2; //numero/=2;
    }else{
      // es impar
      numero = numero *3 + 1;
    }
    contador++;
  }
  return contador;
}

console.log(pasos(18));
