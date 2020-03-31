$(function () {
	var MMIClick = {
		score: 0,
		bestscore: 0,
		//pseudo: prompt('Rentrez votre nom:'),
		temps: 2,
		ready: false,

	};
	click(MMIClick);
	starter(MMIClick);	
	$('h1 span#pseudo').text(MMIClick.pseudo);

	
});

function chrono(game) {	
	var mytimer = setInterval(function () {
		if(game.temps>0) {
			game.ready = true;
			game.temps--;
			$('h2 span#temps').text(game.temps);
		}else{
			clearInterval(mytimer);
			game.ready = false;
			$('h2 span#temps').text('2');
			$('#try_again').fadeIn();
			if (game.score>game.bestscore) {
					game.bestscore=game.score;
					$('#bestscore').text('meilleur score: '+game.bestscore+' clicks');
				}
				
		}
		
	}, 1000);
}

function click(game) {
	$('#zoneClick').click(function(){
		if (game.ready == true) {
			game.score++;
			console.log(game);
			$('h2 span#score').text(game.score);
		};
	});

	$('#try_again').click(function(){
		game.score = 0;
		game.temps = 2;
		chrono(game);
		$(this).fadeOut();

	});

};

function starter(game) {
	$('.game').hide();
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

