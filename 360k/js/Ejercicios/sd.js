function calcula(){
// Obtener Valores de las caja de texto.
var mes = document.getElementById('mes').value;
var year = document.getElementById('year').value;
document.getElementById('sabado').value=sabados(mes,year)[0]; //Array Posicion 1
document.getElementById('domingo').value=sabados(mes,year)[1]; //array Posicion 2
}


function total(){
  var year = document.getElementById('year').value;
  var total = 0;
  for (var i = 1;i<=12;i++){
    total+=sabados(i,year);
  }
  document.getElementById('festivos').value=total;

}

// En una solo funcion
function sabados(mes,year){
  var cont=0, cont2=0;
  var diasMes = diasmes(mes,year);
  for(var i = 1;i<=diasMes;i++){
    var fecha= new Date(year,mes-1,i);
    console.log(fecha.getDay());
    if(fecha.getDay() === 6){
      cont++;
    }
    if(fecha.getDay() === 0){
      cont2++;
    }
  }
  return [cont ,cont2] // Devolvemos un array;
}


// Con dos Funciones
/*
function sabados(mes,year){
  var cont=0;
  var diasMes = diasmes(mes,year);
  for(var i = 1;i<=diasMes;i++){
    var fecha= new Date(year,mes-1,i);
    console.log(fecha.getDay());
    if(fecha.getDay() === 6){
      cont++;
    }
  }
  return cont;
}

function domingo(mes,year){
  var cont=0;
  var diasMes = diasmes(mes,year);
  for(var i = 1;i<=diasMes;i++){
    var fecha= new Date(year,mes-1,i);
    console.log(fecha.getDay());
    if(fecha.getDay() === 0){
      cont++;
    }
  }
  return cont;
}

*/

function diasmes(month, year){
  return new Date(year, month, 0).getDate();
}
