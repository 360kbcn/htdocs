var correcto = 0;
var listo=0;

function empezar(){
  var Alea1 = Math.floor((Math.random()*10)+1);
  var Alea2 = Math.floor((Math.random()*10)+1);
  document.getElementById('num1').value=Alea1;
  document.getElementById('num2').value=Alea2;
  document.getElementById('num3').value="";
  Mensaje.innerHTML="";
  correcto = Alea1*Alea2;
}

function comprobar(){
  var listo = document.getElementById('num3').value;
  if (listo == correcto){
    Mensaje.innerHTML="A C E R T A S T E S";
  }else{
    Mensaje.innerHTML="La Cagastes";
  }
}
