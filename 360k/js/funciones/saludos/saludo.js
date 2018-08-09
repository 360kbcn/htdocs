/*function saludo(){
  return "Hola que tal";
}

console.log(saludo());
var s=saludo();*/

/*
function doble(num){
  return (num*2);
}

var a = 6;
var resul = doble(a);
console.log(resul);
*/
/*
function mayor(a,b,c){
  if (a>b || a>c){
    return a;
  }if (b>c || b>a) {
    return b;
  }
  return c;
}

console.log(mayor(1,7,9));
console.log(mayor(9,1,7));
console.log(mayor(1,9,7));
console.log(mayor(7,1,9));
*/

function factorial(numero){
  var resul = 1
  for (var i = 1; i <=numero; i++){
    resul *=i;
  }
  return resul;
}

console.log(factorial(5));
