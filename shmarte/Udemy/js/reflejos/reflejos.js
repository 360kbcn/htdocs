
var inicio = new Date().getTime(); // Variable de Tipo Global
function colorAleatorio(){
  var letters = '0123456789ABCDEF'.split('');
  var color = '#';
  for (var i = 0; i<6; i++){
    color += letters[Math.round(Math.random() * 15)];
  }
  return color;
}

// Funcion para que aparezcan las formas
function aparecerforma(){

  var top = Math.random()*400;
  var left = Math.random()*400;
  var width = (Math.random()*200)+100;
  var colorFondo=colorAleatorio();

  if(Math.random()>0.5){
      document.getElementById('forma').style.borderRadius="50%";
  }else{
      document.getElementById('forma').style.borderRadius="0%";
  }

  document.getElementById('forma').style.display="block";
  document.getElementById('forma').style.top = top + "px";
  document.getElementById('forma').style.left = left + "px";
  document.getElementById('forma').style.width = width + "px";
  document.getElementById('forma').style.height = width + "px";
  document.getElementById('forma').style.backgroundColor = colorFondo;

  inicio = new Date().getTime();


}

function aparecerFormaDespuesDeRetraso(){
  setTimeout(aparecerforma, Math.floor((Math.random()*1000)+1));
}

document.getElementById('forma').onclick = function(){
  document.getElementById('forma').style.display="none";
  var fin = new Date().getTime();
  var diferencia = (fin-inicio)/1000;
  diferencia2 = diferencia.toFixed(2);
  document.getElementById('reaccion').innerHTML = diferencia2 + " Mil/seg";
  // setTimeout(aparecerforma,2000);
  aparecerFormaDespuesDeRetraso();
}

function Instrucciones(){
  alert("Haz click en las figuras tan rápido como puedas");
}

document.getElementById('btn_1').onclick = function(){
  Instrucciones();

}
