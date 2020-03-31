<?php
	session_start();
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/MODEL/php/class.php');
	$bdd = new ClassBDD("categorie_menu");
	$item = $bdd->readData($_POST['id_menu'],"categorie_menu",'Id_menu_principal');
	echo json_encode($item);
	//$test = array( JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE,JSON_PARTIAL_OUTPUT_ON_ERROR);
  ?>