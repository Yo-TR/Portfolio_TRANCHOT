<!DOCTYPE html>
<html lang="fr">
<?php
	require_once ($_SERVER['DOCUMENT_ROOT'].'/admin/CONTROLER/function.php');
	if ( is_session_started() === FALSE ) session_start();
	$_SESSION["page"]= 'create';
	$_SESSION["titre"]= 'Créer';
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/header.php');
?>
<body>
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/menu.php');
?>
<div id="err"></div>
<div class="container">
	<div class="container-item" id="item01">
		<h1>Menu</h1>
		  	<div class="form-group">
			  <label class="form-label" for="date-projet">Menu</label>
			  <div class="controls row">
			  	<select class="custom-select col-11" onchange="selctMenu(this.value);setHidden(this.value,'Id_menu_principal');showProjet('item02');">
			  		<option value="" selected disabled>Menu</option>
					<?php
						foreach ($_SESSION["menu"] as $value) {
							echo '<option  value="'.$value['Id_menu_principal'].'">'.$value['Nom'].'</option>';
						}
					 ?>
				</select>
			  	<button onclick="montrer('newMenu')">+</button>
			  </div>
			</div>
		<form id="newMenu" data-Type="createtData" data-Table="menu_principal" style="display: none;">
		  	<div class="form-group">
			  <div class="controls">
			  	<label class="form-label" for="nwItem">Nom:</label>
			  	<input type="nwItem" name="nom">
			  	<button type="submit" name="menu_principal">Ajouter</button>
			  </div>
			</div>
		</form>
	</div>

	<div class="container-item" id="item02" style="display: none;">
		<h1>Catégorie</h1>
			  	<div class="form-group">
				  <label class="form-label" for="date-projet">Catégorie</label>
				  <div class="controls row">
				  	<select class="custom-select col-11" id="item" onchange="setHidden(this.value,'domaine');showProjet('item03')">
					</select>
				  	<button onclick="montrer('newCat')">+</button>
				  </div>
				</div>
			<form id="newCat" data-Type="createtData" data-Table="categorie_menu" style="display: none;">
			  	<div class="form-group">
				  <div class="controls">
				  	<label class="form-label" for="nwItem">Nom:</label>
				  	<input type="text" name="Nom">
				  	<button type="submit" name="categorie_menu" >Ajouter</button>
				  </div>
				</div>
				<input type="hidden" name="Id_menu_principal" id="Id_menu_principal" value="">
			</form>		
	</div>

	<div class="container-item" id="item03" style="display: none;">
		<h1>Ajouter Projet</h1>
		<form enctype="multipart/form-data" data-Type="createtData" data-Table="projets">
			<div class="form-group">
				<label for="titre-page">Titre</label>
				<input type="text" class="form-control" name="titre" id="titre-page" placeholder="Titre du projet">
			</div>

		  	<div class="form-group">
			  <label class="form-label" for="media">Image du projet	</label>
			  <div class="controls">
				<input class="upload_files" name="Chemin" type="file" id="media">
			  </div>
			</div>

		  	<div class="form-group">
			  <label class="form-label" for="media-Type">Type de projet</label>
			  <div class="controls">
			  	<select class="custom-select" onchange="setHidden(this.value,'Type_media');setAdrProj(this.value)">
				  <option selected disabled>Type de projet</option>
				  <option value="youtube">Vidéo</option>
				  <option value="prog">Programation</option>
				  <option value="article">Article</option>
				</select>
			  </div>
			</div>

		  	<div id="adresse_projet"  class="form-group" style="display: none;">
			  <label class="form-label" for="imgHead">Contenu Page</label>
			  <div class="controls">
			  </div>
			</div>
 

			<input type="hidden" name="Type_media" id="Type_media" value="">
			<input type="hidden" name="Domaine" id="domaine" value="">
			<button type="submit" class="btn btn-color" name="Projet">Submit</button>
		</form>
	</div>

<div class="retour"></div>

</div>
<script type="text/javascript">
	function setHidden(argument,hid) {
		$('#'+hid).attr('value', argument);
		console.log($('#'+hid).val());
	}

	function showProjet(argument) {
			$('#'+argument).show();
	}

	function setAdrProj(value) {
		$('#adresse_projet').show();
		if (value == "youtube") {
			$('#adresse_projet>.controls').html('<input type="url" name="adresse_projet" placeholder="example.com" pattern="https://.*" size="30"></textarea><input type="hidden" name="youtube" value="getID">')
		} else if (value == "prog") {
			$('#adresse_projet>.controls').html('<input class="upload_files" type="file"  name="adresse_projet" webkitdirectory multiple>')
		}else if (value == "article") { 
			$('#adresse_projet>.controls').html('<textarea  name="adresse_projet" id="summernote"></textarea><input type="hidden" name="summernote" value="textHTML">');
			 $('#summernote').summernote({
			  	  height: 500,                 // set editor height
				  minHeight: 500,             // set minimum height of editor
				  maxHeight: null,             // set maximum height of editor
			  });
		}
	}
</script>
<?php 
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/footer.php');
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/script.php');
	echo "\n";
?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
</body>
</html>
