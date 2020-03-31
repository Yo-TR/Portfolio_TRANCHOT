//Afecte la class active à la partie active du menu
$('.nav-item').each(function() {
  $(this).removeClass('active');
  var itemText = $(this).text();
  if (itemText.trim() == $('title').text()) {
    $(this).addClass('active');
  }    
}); 

$(document).ready(function() {
	if ($('#summernote')[0]) {
	  $('#summernote').summernote({
	  	  height: 500,                 // set editor height
		  minHeight: 500,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
	  });	
	}

});

//Objet qui s'occupe de la gestion des formulaire
function Form(form) {
	
	this.parForm = form;
	//cette fonction vérifie le formulaire avant de le transmetre
	this.verfif = function() {
    	return true
	};

	this.setArray = function () {
		if (this.verfif()) {
			x = new FormData(this.parForm)
			var z = {};
			for (const [key, value]  of x.entries()) {
			    z[key] = value;
			}
			z = JSON.stringify(z);
			//console.log(z);
			return z;		
		}
	};

	this.Ajxsend = function () {
			console.log(this.parForm);
			fd = new FormData(this.parForm);
			fd.append('type', this.parForm.getAttribute('data-Type'));
			fd.append('table', this.parForm.getAttribute('data-Table'));
			console.log(fd);
	        $.ajax({
	            url: '/admin/CONTROLER/form.php',
	            type: 'POST',
	            data: fd,
	            contentType: false,
	            processData: false,
	            success: function(response){
				/*$.each($('form'), function(index, val) {
					 $('form')[index].reset();
				});*/
				$('.retour').html(response);
	            },
	        });
	};
}

$.each($('form'), function(index, val) {
	 $(this).submit(function(event) {
		event.preventDefault();
		//console.log($(this));
		new Form(this).Ajxsend();
	})
});

function montrer(argument) {
	var x = $('#'+argument).css('display');
	if (x === 'none') {
		$('#'+argument).show();
	} else {
		$('#'+argument).hide();
	}
}

function selectedTable(value) {
	//console.log(value);
	window.location = '/admin/CONTROLER/get_table.php?table='+value;
};

function selctMenu(value) {
	$("#item").html("<option selected disabled>Catégorie</option>")
	console.log(value);
	$.post('/admin/CONTROLER/ajx_create.php', {id_menu: value}, function(data) {
		//$(".retour").html(data);
		data = JSON.parse(data);
		//console.log(data);
		for(var i = 0; i < data.length; i++){
		$("#item").append('<option value="'+data[i]['Nom']+'">'+data[i]['Nom']+'</option>');	
		}
	});
};

/*
  var test = true
  var div_cliquable =  $('#txt');
  $('#txt').dblclick(function(event) {
    console.log('coucou');
    $('#intxt').attr('value', $(this).text());
    $('#intxt').css('display', 'block');
    $(this).html($('#intxt'));
    test = true
  });
  Fonction mise a jour contenu tableur avec doubleclik comme phpmyadmin
  $(document.body).dblclick(function(e) {
    // Si ce n'est pas #ma_div ni un de ses enfants
    if( !$(e.target).is(div_cliquable) && !$.contains(div_cliquable[0],e.target) ) {
       $('#intxt').css('display', 'none');
       if (test) {
        div_cliquable.append($.trim($('#intxt').val()))
        test = false
       }
    }
  });
*/

