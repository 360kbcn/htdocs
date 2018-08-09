var n1 = prompt("Escribe un Numero");
var n2 = prompt("Escribe otro Numero");
var n3 = prompt("Escribe otro mas");
if (parseInt(n1)>parseInt(n2)){
    alert(n1+" Es el mayor");
}else if(parseInt(n2)>parseInt(n3)) {
    alert(n2+" Es el mayor");
}else{
    alert(n3+" Es el mayor");
}
