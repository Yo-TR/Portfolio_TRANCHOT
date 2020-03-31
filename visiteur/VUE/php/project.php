<?php 
session_start();
  include ($_SERVER['DOCUMENT_ROOT'].'/admin/MODEL/php/class.php');
  $bdd = new ClassBDD("categorie_menu");
  $titre = array('Nom');
  $menu = $bdd->readData(4,'categorie_menu','Id_menu_principal',$titre);
 ?>
  <div class="d-flex flex-column text-center col-10 col-md mx-auto">
    <?php 
      for ($i=0; $i < sizeof($menu) ; $i++) { 
        $html = '<div class="titre" id="titre'.$i.'">"';
        $html .='<a href="/visiteur/VUE/php/vue_project.php?page=vue_project&content='.$menu[$i]['Nom'].'">'.mb_strtoupper($menu[$i]['Nom']).'</a>';
        $html .='</div>';
        echo $html;
      }
     ?>     
  </div>


