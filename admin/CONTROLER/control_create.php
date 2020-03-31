<?php
	session_start();
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/MODEL/php/class.php');
			$bdd = new ClassBDD("menu_principal");
			$menu = $bdd->selectAll("menu_principal");
			$_SESSION["menu"]=$menu;
			header('Location: /admin/VUE/php/Creer/create.php');

  ?>