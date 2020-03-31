function progress(nom,width){
      var progress = document.getElementById(nom);
      setTimeout(function(){progress.style.width = width;}, 1000) 
    };
    progress('skillHTML','60%');
    progress('skillPHP','20%');
    progress('skillSQL','20%');
    progress('skillJS','30%');
    progress('skillCSS','60%');
    progress('skillPshop','50%');
    progress('skillAI','50%');