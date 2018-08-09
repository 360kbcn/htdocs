var matriz = new Array();

matriz[0] = "Repuestos feHona";
matriz[1] = "Repuestos Audi";
matriz[2] = "Repuestos Ford";
matriz[3] = "Repuestos ferrari";
matriz[4] = "Repuestos FRemite"
// patrón de busqueda
var pattern = /Re.*F/i;  // con la i al final ignora entre mayusculas y minusculas solo busca coindencias con f
for (var i = 0; i < matriz.length; i++) {

  // $('#empantalla').text('Existe La letra'+ matriz[i] + " " + pattern.test(matriz[i]);

  document.getElementById("empantalla").innerHTML +='<br>' + matriz[i] + " " + pattern.test(matriz[i],i);

}
