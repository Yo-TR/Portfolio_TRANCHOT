<?php
	session_start();
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/MODEL/php/class.php');
	$bdd = new ClassBDD($_GET["table"]);
	$tableShow = $bdd->selectAll($_GET["table"]);
	$_SESSION["tableShow"]=$tableShow;
	$_SESSION["table"]=$_GET["table"];
	$_SESSION["tabList"]=$bdd->listTab();
	header('Location: /admin/VUE/php/Arborescence/arborescence.php');

  ?>