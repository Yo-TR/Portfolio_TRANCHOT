$('.form-signin').submit(function(event) {
	event.preventDefault();
	var form = $(this);
   $.post('/admin/CONTROLER/log_controller.php',form.serialize(), function(data) {
              console.log(data);
              data = JSON.parse(data);
              if (data['retour'] === 'accueil') { 
                console.log(data['lien']);
                 $('#containerAjax').html(data);
                window.location.replace(data['lien'])                 
            }
            else {
                $('#containerAjax').html(data);
            } 
   });
});
