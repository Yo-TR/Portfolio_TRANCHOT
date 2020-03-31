<?php
if (!empty($_GET['page'])) {
		$page = $_GET['page'];
	}else{
		$page = 'accueil';
	}
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Team Meca</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<?php echo ('<link rel="stylesheet" type="text/css" href="css/'.$page.'.css">')?>
</head>
<body>
<nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light font-weight-bold">
  <a class="navbar-brand d-flex flex-column" href="index.php">
    <img src="image\logo.png" width="100" height="auto" alt="">
    Industries-collectivités<br> Association-Particulier
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mx-auto col-8 d-flex justify-content-between">
      <li class="nav-item">
        <a class="nav-link flex-fill text-center" href="index.php?page=accueil">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item flex-fill text-center">
        <a class="nav-link" href="index.php?page=a_propos">À Propos</a>
      </li>
      <li class="nav-item flex-fill text-center">
        <a class="nav-link" href="index.php?page=realisations">Réalisations</a>
      </li>
      <li class="nav-item flex-fill text-center">
        <a class="nav-link" href="index.php?page=">Location</a>
      </li>
      <li class="nav-item flex-fill text-center">
        <a class="nav-link" href="index.php?page=contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<section><?php include('html/'.$page.'.html');?></section>

<footer>
	<div class="container">
	<div class="row justify-content-around">
		<div class="col-8 col-md text-left">
			<h2>Nous Contacter</h2>
			<div>				
				104 rue des Tilleuls<br>
				60230 CHAMBLY - FRANCE
			</div>
			<div>
				<a href="tel:+33769383790">Tel: 07 69 38 37 90</a><br>
				<a href="mailto:team.meca@outlook.com">Mail: team.meca@outlook.com</a>
				<p>SIRET : 84019456700011</p> 
			</div>
		</div>

		<div class="col text-left">
			<h2 class="text-md-center">Liens</h2>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="index.php?page=a_propos">À Propos</a></li>
			<li><a href="index.php?page=realisations">Réalisations</a></li>
			<li><a href="index.php?page=">Location</a></li>
			<li><a href="index.php?page=contact">Contact</a></li>			
		</div>
		<div class="col-md d-flex flex-column text-center">
			<h2>Horaires</h2>
			<div>Lun - Ven: 7h - 18h  Sam: 7h - 12h</div>
			<div id="img" class="row justify-content-center my-3">				
				<a href="https://www.facebook.com/teammeca.co/" target="_blank"><img src="image\Logo_reseau\facebook.png" alt="facebook" width="50%"></a>
				<a href="https://www.instagram.com/team.meca/" target="_blank"><img src="image\Logo_reseau\Insta.png" alt="Insta" width="50%"></a>
				<a href="https://www.linkedin.com/in/guy-toche-844446162" target="_blank"><img src="image\Logo_reseau\Linkedin.png" alt="Linkedin" width="50%"></a>
			</div>					
		</div>						
	</div>
	</div>
		
	<div id="bottom" class="container col">
		<li class="text-center d-flex align-items-center justify-content-center"><a href="#">© 2018 by TEAM MECA  - CHAMBLY - FRANCE - SIRET 84019456700011</a></li>
	</div>
</footer>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>