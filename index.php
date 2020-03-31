<!DOCTYPE html>
<html lang="fr">
<?php
session_start();
  if (isset($_GET["page"])) {
     $_SESSION["page"]=$_GET["page"];
     $_SESSION["titre"]=$_GET["page"];
  }else {
     $_SESSION["page"]='accueil';
     $_SESSION["titre"]='accueil';
  }



  $logo = "visiteur/VUE/image/";
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/visiteur/VUE/php/Starter/header.php'); ?>
<body>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/visiteur/VUE/php/Starter/menu.php'); ?>

<div class="container-fluid section" style="display: none;">
   <div class="row">
    <div id="text" class="mx-auto">
      <div id="soustire1" class="d-lg-flex justify-content-center"></div>
      <div id="nom">YOANN TRANCHOT</div>
      <span id="soustire2" class="d-lg-flex justify-content-end"></span>
    </div>
    <div id="link">
      <a  href="index.php?page=contact">
        <button type="submit" class="btn btn-color">Me Contacter</button>
      </a>
    </div>  
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/visiteur/VUE/php/Starter/script.php'); ?>
</body>
</html>