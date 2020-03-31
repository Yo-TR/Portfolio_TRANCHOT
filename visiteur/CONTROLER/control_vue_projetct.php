<?php  
  session_start();
  include ($_SERVER['DOCUMENT_ROOT'].'/admin/MODEL/php/class.php');
  $bdd = new ClassBDD("projets");
  $titre = array('Domaine','Titre','Chemin_img','adresse_projet');
  $menu = $bdd->readData($_POST['domaine'],'projets','Domaine',$titre);
  echo json_encode($menu);

?>