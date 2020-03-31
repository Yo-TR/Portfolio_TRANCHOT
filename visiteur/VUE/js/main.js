$.get('/visiteur/CONTROLER/affiche_menu.php', function(data) {
	data = JSON.parse(data);
	for (var i = 0; i < data.length; i++) {
		x = document.getElementsByClassName('navbar-nav')[0];
		var li = document.createElement('li');
		li.setAttribute('class', "nav-item");

		var a = document.createElement('a');
		a.setAttribute('class', "nav-link");
		a.setAttribute('href', '/'+data[i]['lien']);
		a.textContent = data[i]['Nom'];
		li.appendChild(a);
		x.appendChild(li);
	}
	/*$('.nav-link').each(function(index, el) {
		$(this).on('click',function(event) {
			event.preventDefault();			
			var url = $(this).attr('href').replace('.php', '');
			var filename = url.substring(url.lastIndexOf('/')+1);
			$('title').text(filename);
			$('.section').load($(this).attr('href'));
			$("#cssPage").attr('href', '/visiteur/VUE/css/'+filename+'.css');
			$.getScript('visiteur/VUE/js/'+filename+'.js');
		});		
	});*/
});



$('.section').load('/visiteur/VUE/php/'+$('title').text()+'.php',function(){
	//Afecte la class active à la partie active du menu
	$('.nav-item').each(function() {
	  $(this).removeClass('active');
	  var itemText = $(this).text();
	  console.log(itemText.trim());
	  if (itemText.toLowerCase() == $('title').text()) {
	    $(this).addClass('active');
	  }    
	}); 	
	$.getScript('/visiteur/VUE/js/'+page+'.js');
});





