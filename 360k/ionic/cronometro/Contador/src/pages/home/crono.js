var reloj=0;
var temp;

function iniciar(){
  temp=setTimeout(incremento,100);
}

function parar(){
  clearTimeout(temp);
}

function incremento(){
  reloj=reloj+1;
  document.getElementById('reloj').innerHTML=reloj/10;
  temp=setTimeout(incremento,100);
}

function reset(){
  reloj=0;
  clearTimeout(temp);
  document.getElementById('reloj').innerHTML="0";

}
