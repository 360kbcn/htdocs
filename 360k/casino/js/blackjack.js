$(function () {
    var saldo = getCookie("saldo");
    if (saldo===""){
        setCookie("saldo",100,30);
        saldo=100;
    }
    var baraja, banca, jugador;
    reset();
    $('#jugar').click(function () {
        iniciarJuego();
    })
    $('#pedir').click(function () {
        jugador.push(baraja.pop());
        mostrar('jugador', jugador, false);
        $('#puntos').html("Tu puntuación es: " + puntuacion(jugador));
        if (puntuacion(jugador) > 21) {
            saldo--;
            $('#mensajes').html("Has perdido");
            reset();
        }
    });
    $('#plantar').click(function () {
        while (puntuacion(banca) < 17) {
            banca.push(baraja.pop());
        }
        mostrar('banca', banca, false);

        if (puntuacion(jugador) > puntuacion(banca)
                || puntuacion(banca) > 21) {
            saldo++;
            $('#mensajes').html("Has ganado");
        } else {
            saldo--;
            $('#mensajes').html("Has perdido");
        }
        reset();
    });
    function reset() {
        $('#pedir').hide();
        $('#plantar').hide();
        $('#jugar').show();
        ponSaldo(saldo);
    }
    function iniciarJuego() {
        baraja = getBaraja();
        banca = [];
        banca.push(baraja.pop());
        banca.push(baraja.pop());
        jugador = [];
        jugador.push(baraja.pop());
        jugador.push(baraja.pop());
        mostrar('banca', banca, true);
        mostrar('jugador', jugador, false);
        $('#puntos').html("Tu puntuación es: " + puntuacion(jugador));
        $('#mensajes').html("");
        $('#pedir').show();
        $('#plantar').show();
        $('#jugar').hide();
    }
    function ponSaldo(saldo) {
        $('#saldo').html("Saldo: " + saldo + " €");
    }
    function puntuacion(tabla) {
        var puntos = 0;
        var ases = false;
        for (var i = 0; i < tabla.length; i++) {
            puntos += valor(tabla[i]);
            if (valor(tabla[i]) === 1) {
                ases = true;
            }
        }
        if (ases && puntos + 10 <= 21) {
            puntos += 10;
        }
        return puntos;
    }
    function valor(cadena) {
        var valor = parseInt(cadena.slice(0, -1));
        if (valor > 10) {
            valor = 10;
        }
        return valor;
    }

    function mostrar(elemento, tabla, esconder) {
        $('#' + elemento).html("");
        for (var i = 0; i < tabla.length; i++) {
            if (esconder && i === 0) {
                $('#' + elemento).append('<img src="baraja/d1.png" alt="">');
            } else {
                $('#' + elemento).append('<img src="baraja/' + tabla[i] + '.png" alt="">');
            }
        }
    }
    function getBaraja() {
        var res = [];
        var palos = "cpdt";
        for (var i = 1; i <= 13; i++) {
            for (var j = 0; j < palos.length; j++) {
                res.push(i + palos.charAt(j));
            }
        }
        res.sort(function () {
            return 0.5 - Math.random();
        });
        return res;
    }
});