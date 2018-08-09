//Validamos un Email
$('#boton').click(function() {
    //Utilizamos una expresion regular
var texto=$('#texto').val();
var reg= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    //Se utiliza la funcion test() nativa de JavaScript
    if (reg.test(texto)) {
      $('#empantalla').text('El Correo es Valido '+texto);
    } else {
      $('#empantalla').text('El Correo no es Valido ');
}
});
