function calcular(){
  var mes = document.getElementById('mes').value;
  var anyo = document.getElementById('anyo').value;
}

function maximoAnual(anyoDesde, anyoHasta){
  var anyo=[];
  var maximo=0;
  for (var i=anyoDesde;i<=anyoHasta;i++){
    var t=total(i);
    if (t===maximo){
      anyo.push(i);
    }
    if (t>maximo){
      anyo=i;
      maximo=t;
    }
  }
  return [anyo, maximo];
}

function mesesFestivos(anyo){
  for (var )
}

function total(anyo){
  var total=0;
  for (var i=1;i<=12;i++){
    total+=festivos(i,anyo);
  }
  return total;
}

function festivos(mes,anyo){
  var cont=0;
  var diasMes = dyasInMonth(mes, anyo);
  for (var i=1;i<=diasMes; i++){
    var fecha = new Date(anyo, mes -1, i);
    if (fecha.getDay() ===6 || fecha.getDay() ===0){
      cont++;
    }
  }
}


function dyasInMonth(month, year){
  return new Date(year, month, 0).getDate();

}
