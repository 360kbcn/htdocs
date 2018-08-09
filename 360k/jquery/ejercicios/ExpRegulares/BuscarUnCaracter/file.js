//El boton responde al evento clic
$('#boton').click(function() {
    //Utilizamos una expresión regular  para buscar la letra reg=/letra/ en la cadena ingresada
 reg=/p/;
    //Si a existe mostramos el mensaje
    if (reg.test($('#texto').val() )) {
        $('#empantalla').text('Existe La letra');
    }
    else {
        $('#empantalla').text('No Existe la letra');
        //alert('No existe A');
    }
});
