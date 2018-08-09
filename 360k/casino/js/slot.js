$(function () {
    var saldo = 100;
    var premios = [2, 3, 4, 5, 6, 7, 8, 90, 100];

    ponSaldo(saldo);
    rellenaTabla();

    $('#jugar').click(function () {
        //Restar uno al saldo
        saldo--;
        //Obtener tres números aleatorios
        var pos = [];
        pos.push(Math.floor(Math.random() * 9));
        pos.push(Math.floor(Math.random() * 9));
        pos.push(Math.floor(Math.random() * 9));
        pos[1] = pos[0];

        //Poner las imágenes correspondientes
        $('#fruta1').hide();
        $('#fruta2').hide();
        $('#fruta3').hide();
        $('#fruta1').attr('src', 'img/fruta' + pos[0] + ".png");
        $('#fruta2').attr('src', 'img/fruta' + pos[1] + ".png");
        $('#fruta3').attr('src', 'img/fruta' + pos[2] + ".png");
        $('#fruta1').slideDown(1000);
        $('#fruta2').slideDown(1500);
        $('#fruta3').slideDown(2000);

        //Comprobar si hay premio y actualizar saldo si lo hay
        if (pos[0] === pos[1] && pos[1] === pos[2]) {
            var premio = premios[pos[0]];
            saldo += premio;
            $('#mensajes').html("<h2>Has ganado " + premio + " €</h2>");
        }
        //Poner saldo
        ponSaldo(saldo);
    });

    function ponSaldo(saldo) {
        $('#saldo').html("Saldo: " + saldo + " €");
    }

    function rellenaTabla() {
        for (var i = 8; i >= 0; i--) {
            var imagen = '<td><img src="img/fruta' + i + '.png" alt=""></td>';
            $('#premios').append("<tr>" + imagen + imagen + imagen + "<td>" + premios[i] + "€</td></tr>");
        }
    }
});

