$(function () {
    var saldo = 100;
    var objetivo;

    iniciar();

    $('#jugar').click(function () {
        //Restar uno al saldo
        var resultado = tirada();
        if (resultado === 7 || resultado === 11) {
            saldo++;
            $('#mensajes').html("<h2>Has ganado 1 €</h2>");
            ponSaldo(saldo);
        } else if (resultado === 2 || resultado === 3 || resultado === 12) {
            saldo--;
            $('#mensajes').html("<h2>Has perdido 1 €</h2>");
            ponSaldo(saldo);
        } else {
            objetivo = resultado;
            $('#mensajes').html("");
            $('#objetivo').html("<h2>Tu objetivo es " + objetivo + "</h2>");
            $('#jugar').hide();
            $('#tirada').show();
        }
    });
    $('#tirada').click(function () {
        var resultado = tirada();
        if (resultado === 7) {
            saldo--;
            $('#mensajes').html("<h2>Has perdido 1 €</h2>");
            iniciar();
        }
        if (resultado === objetivo) {
            saldo++;
            $('#mensajes').html("<h2>Has ganado 1 €</h2>");
            iniciar();
        }
    });

    function iniciar() {
        $('#tirada').hide();
        $('#jugar').show();
        $('#objetivo').html("");
        ponSaldo(saldo);
    }
    function ponSaldo(saldo) {
        $('#saldo').html("Saldo: " + saldo + " €");
    }
    function tirada() {
        var dado1 = Math.floor(Math.random() * 6) + 1;
        var dado2 = Math.floor(Math.random() * 6) + 1;
        
        $('#dado1').attr('src', 'img/dado' + dado1 + ".png");
        $('#dado2').attr('src', 'img/dado' + dado2 + ".png");
        return dado1 + dado2;
    }
});

