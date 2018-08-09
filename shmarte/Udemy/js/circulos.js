document.getElementById("circulo-rojo").onclick = function (){
  document.getElementById("circulo-rojo").style.display = "none";
}
document.getElementById("circulo-amarillo").onclick = function (){
  document.getElementById("circulo-amarillo").style.display = "none";
}
document.getElementById("circulo-verde").onclick = function (){
  document.getElementById("circulo-verde").style.display = "none";
}
document.getElementById("Reset").onclick = function(){
  document.getElementById("circulo-rojo").style.display = "block";
  document.getElementById("circulo-verde").style.display = "block";
  document.getElementById("circulo-amarillo").style.display = "block";
}
