$(function() {
  $('#anyadir').click(function() {
    /* Act on the event */
    var numero=Math.floor(Math.random()*10)+1;
    $('#lista').append("<tr><td>"+numero+"</td></tr>");
  });
  $('#delPrimera').click(function() {
    /* Act on the event */
    $('#lista tr:first-child').remove();
  });
  $('#delUltima').click(function() {
    /* Act on the event */
    $('#lista tr:last-child').remove();
  });
  $('#suma').click(function() {
    /* Act on the event */
    var suma=0;
    for (var i = 1; i <= $('#lista tr').length; i++) {
      suma += parseInt($('#lista tr:nth-child(' + i + ') td').html());
}
$('#lista').before("suma: "+suma);
});
});
