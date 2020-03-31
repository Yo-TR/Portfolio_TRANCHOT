$(function() {	
	$('form').on('submit', function(event) {
		event.preventDefault();
		var MMIClick = {
		pseudo : $('#pseudo').val(),
		score : 0,
		bestscore: 0,
		formTemps: $('#time').val(),
		temps: $('#time').val(),
	};
	$('#nom').text(MMIClick.pseudo);

	console.log(MMIClick.pseudo);

	$(this).fadeOut();

	click(MMIClick);
	starter(MMIClick);
	});

})

function chrono(game) {	
	var mytimer = setInterval(function () {
		if(game.temps>0) {
			game.ready = true;
			game.temps--;
			$('h2 span#temps').text(game.temps+' s');
		}else{
			clearInterval(mytimer);
			game.ready = false;
			$('.boutons').fadeIn();
			$('.boutons').css("display","flex");
			if (game.score>game.bestscore) {
					game.bestscore=game.score;
					$('#bestscore').text('Meilleur score: '+game.bestscore);
				}
				
		}
		
	}, 1000);
}

function click(game) {
	$('#zoneClick').click(function(){
		if (game.ready == true) {
			game.score++;
			$('h2 span#score').text(game.score);
		};
	});

	$('#try_again').click(function(){
		game.score = 0;
		$('h2 span#score').text(game.score);
		game.temps = game.formTemps;
		starter(game);
		$('.boutons').fadeOut();

	});
};

function starter(game) {
	$('.game').hide();
	$('#temps').text(game.temps+" s");
	$('.start h2').fadeOut(function () {
		$(this).text('3');
	}).fadeIn().fadeOut(function () {
		$(this).text('2');
	}).fadeIn().fadeOut(function () {
		$(this).text('1');
	}).fadeIn().fadeOut(function () {
		$(this).text('GO');
	}).fadeIn().fadeOut(function () {
		$('.game').fadeIn(function () {
			chrono(game);
		});
	});
};

