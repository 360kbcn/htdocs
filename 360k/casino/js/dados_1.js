$(function () {
    var saldo = 100;
    var objetivo;

    iniciar();

    $('#jugar').click(function () {
        //Restar uno al saldo
        var resultado = tirada();
        if (resultado === 7 || resultado === 11) {
            saldo++;
            mensaje('mensajes', "<h2>Has ganado 1 €</h2>")
            ponSaldo(saldo);
        } else if (resultado === 2 || resultado === 3 || resultado === 12) {
            saldo--;
            mensaje('mensajes', "<h2>Has perdido 1 €</h2>")
            ponSaldo(saldo);
        } else {
            objetivo = resultado;
            $('#mensajes').html("");
            mensaje('objetivo', "<h2>Tu objetivo es " + objetivo + "</h2>")

            $('#jugar').hide();
            $('#tirada').show();
        }
    });
    $('#tirada').click(function () {
        var resultado = tirada();
        if (resultado === 7) {
            saldo--;
            mensaje('mensajes', "<h2>Has perdido 1 €</h2>")
            iniciar();
        }
        if (resultado === objetivo) {
            saldo++;
            mensaje('mensajes', "<h2>Has ganado 1 €</h2>")
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

        roll("dado1", dado1);
        roll("dado2", dado2);
//        $('#dado1').attr('src', 'img/dado' + dado1 + ".png");
//        $('#dado2').attr('src', 'img/dado' + dado2 + ".png");
        return dado1 + dado2;
    }
    function roll(elemento, final) {
        var veces = 10;
        var dado;
        var intervalo = setInterval(function () {
            dado = Math.floor(Math.random() * 6) + 1;
            $('#' + elemento).attr('src', 'img/dado' + dado + ".png");
            veces--;
            if (veces < 0) {
                clearInterval(intervalo);
                $('#' + elemento).attr('src', 'img/dado' + final + ".png");

            }
        }, 100);

    }
    function mensaje(elemento, mensaje) {
        $('#' + elemento).hide();
        $('#' + elemento).html(mensaje);
        $('#' + elemento).delay(1000).fadeIn(400);
    }
});

