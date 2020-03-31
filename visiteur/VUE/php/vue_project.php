<!DOCTYPE html>
<html lang="fr">
<?php
session_start();
    if (isset($_GET['page'])) {
     $_SESSION["page"] = $_GET['page'];
     $_SESSION["titre"] = $_GET['page'];
  }else{
     $_SESSION["page"]='accueil';
     $_SESSION["titre"]='accueil';
  };

  $logo = "/visiteur/VUE/image/";
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/visiteur/VUE/php/Starter/header.php'); ?>
<body>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/visiteur/VUE/php/Starter/menu.php'); ?>



  <div class="container-fluid section">
  <div id="galerie" class="mx-auto d-flex flex-wrap col-md-8 d-flex justify-content-center justify-content-sm-around">     
  </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
<iframe id="ytplayer" type="text/html" width="100%" height="500"
    src=""
    frameborder="0" allowfullscreen ></iframe>
    </div>
  </div>
</div>
<?php $content = $_GET['content'];?>
<script type="text/javascript">
  var pageContent = <?php echo json_encode($content); ?>;
</script>
  <!-- LightWidget WIDGET -->
  <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
<iframe src="//lightwidget.com/widgets/4f1eb0a719b1519daf9d68435a34ee47.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">$(".section").fadeIn(1000);</script>
<script src="/visiteur/VUE/js/particles.js"></script>
<script src="/visiteur/VUE/js/app.js"></script>
<script>
 var page = <?php echo json_encode($_SESSION["page"]); ?>;
</script>
<script src="/visiteur/VUE/js/vue_project.js"></script>

</body>
</html>
