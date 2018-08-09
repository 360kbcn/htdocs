//Buscamos Caracteres no Alfabeticos & % $ @ #
$('#boton').click(function() {
    //Utilizamos una expresion regular
var texto=$('#texto').val();
var reg=/\W/g;
    //Se utiliza la funcion test() nativa de JavaScript
    if (texto.match(reg)) {
      $('#empantalla').text('El resultado es '+texto.match(reg));
    }

});
