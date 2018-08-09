var resultado=0;
var cont=0; cont2=0; z=0;
var mes=[];
function calcula(){
  mes.length=0;
  var year= document.getElementById('year').value;
  borrarArray(mes);
  for(var x=1;x<13;x++){
    /*

  document.getElementById('sabados').value=sabados(x,year);
  document.getElementById('domingo').value=domingo(x,year);
  document.getElementById('suma').value=resultado;*/
  sabados(x,year);
  domingo(x,year);
  mes[x]=resultado;
  cont=0;cont2=0;
  resultado=0;
  mes.sort();
  console.log(mes.slice(0, 3));
  }

}

function borrarArray(mes){
mes.length=0;
}

function sabados(mes,year){
  //var cont=0;
  var diasMes = diasmes(mes,year);
  for(var i = 1;i<=diasMes;i++){
    var fecha= new Date(year,mes-1,i);
    console.log(fecha.getDay());
    if(fecha.getDay() === 6){
      cont++;
    }
  }
  resultado=cont;
  return cont;
}

function domingo(mes,year){
  // var cont2=0;
  var diasMes = diasmes(mes,year);
  for(var i = 1;i<=diasMes;i++){
    var fecha= new Date(year,mes-1,i);
    console.log(fecha.getDay());
    if(fecha.getDay() === 0){
      cont2++;
    }
  }

  resultado=resultado+cont2;
  return cont2;
}



function diasmes(month, year){
  return new Date(year, month, 0).getDate();

}
