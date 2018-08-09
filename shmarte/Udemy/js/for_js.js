/*for (var i=5; i>0; i--){
  alert(i);
}
alert("Fin del for");
*/

var mensajes = ["Primer tweet", "Segundos tweet", "Tercer tweet"];
var cadena="";

for (i=mensajes.length-1; i>=0; i--)
{
  cadena = cadena + "<p>"+mensajes[i]+"</p>"
}
document.getElementById("tweetsDiv").innerHTML = cadena;
