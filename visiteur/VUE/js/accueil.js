  var txt2 = 'Bonjour, je m\'appelle';
  var idtxt2 = 'soustire1';

	

function typeWriter(txt, idtxt) {
    var i = 0;
    var speed = 50;
    (function addLetter() {
       document.getElementById(idtxt).innerHTML += txt.charAt(i);
       i++;
       if (i < txt.length) {
         setTimeout(addLetter, speed);
       }
    })();
}




$("#menu").fadeIn(1000,).css("display", "flex");
setTimeout(function(){typeWriter(txt2,idtxt2,);},1000);
setTimeout(function(){$("#nom").slideDown(1000);},2000);
setTimeout(function(){$("#link").fadeIn(1000,);},3000);
setTimeout(function(){$("#link").addClass('col-12 d-flex justify-content-center')},3000);


  