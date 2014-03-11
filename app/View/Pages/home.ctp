<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
var token = 0;
$(function () {
  $('#getNew').click(function () {
    $.ajax({
      url: "/valida/",
    }).done(function( data ) {
      token = data.token;
      $('#imgContainer').html('<img src="/valida/image/'+token+'"/>');
    })
  });
  $('#btnSend').click(function () {
    if(token!=0) {
      $.ajax({
	url: "/valida/conteo/",
	type: 'POST',
	data: { token: token, value: $('#txtCounter').val() }
      }).done(function( data ) {
	window.alert("Datos enviados");
      })
    }
  });
});
</script>


<input type="button" id="getNew" value="Refrescar" />
<div>
  <div id="imgContainer"></div>
  <input type="text" id="txtCounter" value="" /><br />
  <input type="button" id="btnSend" value="Enviar" />
</div>