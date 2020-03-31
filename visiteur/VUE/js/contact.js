$('#sbt').click(function(event) {
	event.preventDefault();
   $.post('visiteur/CONTROLER/message.php',$(this).submit(), function(data) {
                $('#msg').html(data);
   });
});

$( document ).click(function() {
  $( "#msg" ).toggle( "slide" );
});
 