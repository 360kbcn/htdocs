document.getElementById("alReves").addEventListener('click', alReves);

function alReves() {
    var cadena = document.getElementById("cadena").value;
    var resultado = document.getElementById('resultado');
    var cadenaInvertida = "";

    for (var i = cadena.length; i >= 0; i--) {
        cadenaInvertida += cadena.charAt(i);
    }
    resultado.innerHTML += cadenaInvertida;
    return cadenaInvertida;
}
