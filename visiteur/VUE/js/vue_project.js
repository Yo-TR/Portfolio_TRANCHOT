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
});

var Audiovisuel = [];
var Programation = [];
var Multimedia = [];
var Communication = [];
function ObjMedia(nom,image,adresse) {
	this.nom = nom;
	this.image  = image;
	this.adresse = adresse;
};

function TabPush (domaine,nom,image,adresse) {

	eval(domaine).push(new ObjMedia(nom,image,adresse));
};

function Afficher(Tab) {
	for (var i = 0; i < Tab.length; i++) {
		var html = '<a href="/visiteur/VUE/projet/'+Tab[i].adresse+'" target="_blank" data-keyTab="'+i+'" class="Item d-flex flex-column text-center mx-1 mt-4" id="elt'+i+'"><img src="/visiteur/VUE/image/projets/'+Tab[i].image+'" alt="'+Tab[i].nom+'"><span>'+Tab[i].nom+'</span></a>';
		$('#galerie').append(html);
	};
};

function Afficher_Com(Tab) {
	for (var i = 0; i < Tab.length; i++) {
		var html = '<a href="'+Tab[i].adresse+'" data-keyTab="'+i+'" class="Item d-flex flex-column text-center mx-1 mt-4" id="elt'+i+'"><img src="/visiteur/VUE/image/projets/'+Tab[i].image+'" alt="'+Tab[i].nom+'"><span>'+Tab[i].nom+'</span></a>';
		$('#galerie').append(html);
	};
};

function iframeUrl(keyTab,Tab) {
	for (var i = 0; i < Tab.length; i++) {
		if (keyTab == i) {
			$('#ytplayer').attr('src', "http://www.youtube.com/embed/"+Tab[i].adresse +"?autoplay=1&rel=0&showinfo=0"); 
			$('.modal').modal('show');
		}		
	};
	$(".modal").on('hidden.bs.modal', function (e) {
        $(".modal iframe").attr("src", "");
    });
};

$.post('/visiteur/CONTROLER/control_vue_projetct.php', {domaine: pageContent}, function(data, textStatus, xhr) {
	data = JSON.parse(data);
	console.log(data);
	for (var i=0; i < data.length; i++) {
		TabPush(data[i]['Domaine'],data[i]['Titre'],data[i]['Chemin_img'],data[i]['adresse_projet'],);
	}
		if (pageContent == "Audiovisuel") {
		Afficher(Audiovisuel);
		$('#galerie a').click(function(e) {
			e.preventDefault();
			var keyTab = $(this).attr("data-keyTab");
			iframeUrl(keyTab,Audiovisuel)
			 return false;});
		};

		if (pageContent == "Programation") {
			Afficher(Programation);
		};

		if (pageContent == "Multimédia") {
			$('<iframe>', {
			   src: '//lightwidget.com/widgets/4f1eb0a719b1519daf9d68435a34ee47.html',
			   id:  'myFrame',
			   frameborder: 0,
			   scrolling: 'no',
			   allowtransparency: 'true',
		   }).appendTo('#galerie');
			$('#galerie  iframe').addClass('lightwidget-widget');
			$('#galerie  iframe').css({
				width: '100%',
				border: '0',
				overflow: 'hidden'
			});
		};
		if (pageContent == "Communication") {
			Afficher_Com(Communication);
		};
});




/*TabPush(Audiovisuel,"CDP - Motion","film_metier.png","UuLsSFWqLc4",);
TabPush(Audiovisuel,"Le chef de projet - ITW","film_metier.png","6X4rqUCNH3o",);

TabPush(Programation,"Jitter Click","souris.jpg","programation/Jitter_click/index.html",)
TabPush(Programation,"Machine de l'Ile","carrousel.jpg","programation/Machin_de_l'ile_sem2/accueil.html",);
TabPush(Programation,"Tower Defense","tower defense.jpg","programation/projet-tower-defense/index.html",);
TabPush(Programation,"Team Meca","teammeca.jpg","programation/TeamMeca_Tranchot/index.php",);

if (pageContent == "Audiovisuel") {
	Afficher(Audiovisuel);
	$('#galerie a').click(function(e) {
		e.preventDefault();
		var keyTab = $(this).attr("data-keyTab");
		iframeUrl(keyTab,Audiovisuel)
		 return false;});
};

if (pageContent == "Programation") {
	Afficher(Programation);
};

if (pageContent == "Multimédia") {
	$('<iframe>', {
	   src: '//lightwidget.com/widgets/4f1eb0a719b1519daf9d68435a34ee47.html',
	   id:  'myFrame',
	   frameborder: 0,
	   scrolling: 'no',
	   allowtransparency: 'true',
   }).appendTo('#galerie');
	$('#galerie  iframe').addClass('lightwidget-widget');
	$('#galerie  iframe').css({
		width: '100%',
		border: '0',
		overflow: 'hidden'
	});
};
*/




//<iframe src="//lightwidget.com/widgets/4f1eb0a719b1519daf9d68435a34ee47.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>


