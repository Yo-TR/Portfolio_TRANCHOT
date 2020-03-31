<!DOCTYPE html>
<html lang="fr">
<?php
session_start();
  $_SESSION["page"]='log';
  $_SESSION["titre"]='Connexion';
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/header.php');
?>
<body>
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/menu.php');
?>

<div class="container">
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/'.$_SESSION["page"].'.php');
?>

</div>
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/footer.php');
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/script.php');
echo "\n";
?>
</body>
</html>