 <?php 
  session_start();
  include ($_SERVER['DOCUMENT_ROOT'].'/admin/MODEL/php/class.php');
  $bdd = new ClassBDD("categorie_menu");
  $titre = array('Nom');
  $menu = $bdd->readData(4,'categorie_menu','Id_menu_principal',$titre);
 ?>