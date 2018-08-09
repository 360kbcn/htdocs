//Validar entre Acentos
$('#boton').click(function() {
    //Utilizamos una expresion regular
var texto=$('#texto').val();
var reg=  /^([a-z ñáéíóú]{2,60})$/i;
   if(reg.test(texto)) {
     $('#empantalla').text('La palabra es valida '+texto);
 // document.getElementById("empantalla").innerHTML = 'Resultado <br>'+texto;
    } else {
      $('#empantalla').text('letra con acento o ñ ');
 // document.getElementById("empantalla").innerHTML = '<br>No valida';
  }
});
