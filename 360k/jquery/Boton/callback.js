$('#mas').click(function(){
  var div=$('#resultado').html();
  div +="<p>"+$('#texto').val()+"</p>";
  $('#resultado').html(div);
});
