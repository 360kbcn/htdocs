function array2(){
var notas=[5,4,8,10];
var suma=0;
for (var i = 0;i<notas.length;i++){
  suma+=notas[i];
}
document.getElementById('resul').value=Number(suma);
}
