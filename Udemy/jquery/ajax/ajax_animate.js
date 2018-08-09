$.ajax("infos.txt").done(function(data){
  alert(data);
}).fail(function(){
    alert("ha Ocurrido un Error");
})
