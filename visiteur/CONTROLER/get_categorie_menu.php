<?php 
	session_start();
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/MODEL/php/class.php');
	$bdd = new ClassBDD("categorie_menu");
	$menu = $bdd->readData($_SESSION['val'],'categorie_menu','Id_menu_principal',$_SESSION['arrayCol']);
	$_SESSION['dataGet'] = $menu;
    header('location: /visiteur/VUE/php/project.php');
 ?>