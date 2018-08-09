//El boton desencadena la accion
$('#boton').click(function() {
    //Utilizamos una expresion regular
var texto=$('#texto').val();
var reg=/c..r/g;
    //Se utiliza la funcion test() nativa de JavaScript
    if (texto.match(reg)) {
        $('#empantalla').text('El resultado es '+texto.match(reg));        
    }else{
        $('#empantalla').text('No Existe coincidencia');
    }

});
