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
	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><p><img src="https://img.autoplus.fr/picture/audi/rs_q8/1544335/Audi_RS_Q8_2019_85f0d-1200-800.jpg" style="width: 50%; float: left;" class="note-float-left"></p><p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/visiteur/VUE/php/Starter/script.php'); ?>
</body>
</html>