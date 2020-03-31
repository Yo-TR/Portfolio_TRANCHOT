<?php 
	session_start();
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/MODEL/php/class.php');
	$bdd = new ClassBDD("menu_principal");
	$menu = $bdd->selectAll();
	echo json_encode($menu);
 ?>