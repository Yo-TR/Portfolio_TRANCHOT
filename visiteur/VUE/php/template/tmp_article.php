<!DOCTYPE html>
<html lang="fr">
<?php
session_start();
     $_SESSION["page"] = 'article';
     $_SESSION["titre"] = 'article';
  $logo = "/visiteur/VUE/image/";
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/visiteur/VUE/php/Starter/header.php'); ?>
<body>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/visiteur/VUE/php/Starter/menu.php'); ?>

<div class="container-fluid section" style="display: none;">
	$content
</div>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/visiteur/VUE/php/Starter/script.php'); ?>
</body>
</html>