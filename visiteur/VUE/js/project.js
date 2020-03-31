var nav = $('nav').height();
var screen = $( window ).height();
$('.titre').css('height', (screen-nav-100)/3);
$.post('/visiteur/CONTROLER/control_projetct.php', {domaine: pageContent}, function(data, textStatus, xhr) {
	data = JSON.parse(data);
	console.log(data);
	for (var i=0; i < data.length; i++) {
		TabPush(data[i]['Domaine'],data[i]['Titre'],data[i]['Chemin_img'],data[i]['adresse_projet'],);
	}
});