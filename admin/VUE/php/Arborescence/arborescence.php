<!DOCTYPE html>
<html lang="fr">
<?php
	require_once ($_SERVER['DOCUMENT_ROOT'].'/admin/CONTROLER/function.php');
	if ( is_session_started() === FALSE ) session_start();
	$_SESSION["page"]= 'arborescence';
	$_SESSION["titre"]= 'Arborescence';
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/header.php');
?>
<body>
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/menu.php');
?>
<div class="container">
	<select name="Liste_tab" id="Liste_tab" onchange="selectedTable(this.value)">
		<option value="" selected disabled>Table</option>
		<?php 
			for ($i=0; $i < sizeof($_SESSION["tabList"]) ; $i++) { 
				foreach ($_SESSION["tabList"][$i] as $key => $value) {
					if ($_SESSION["table"] == $value) {
						echo '<option  value="'.$value.'" selected>'.$value.'</option>';
					} else {
						echo '<option  value="'.$value.'">'.$value.'</option>';
					}
				}
			}
		 ?>
	</select>
	<button>Modifier</button>
	<button>Suprimer</button>

	<table class="table table-striped">
		<thead class="thead-dark">
		<tr>
			<th scope="col"></th>
			<th scope="col"></th>
<?php
		echo array_key_exists('Chemin', $_SESSION["tableShow"][0])?'<th scope="col"></th>':"";
		echo array_key_exists('Chemin_img', $_SESSION["tableShow"][0])?'<th scope="col"></th>':"";
		foreach ($_SESSION["tableShow"][0] as $key => $value) {
			if ($key != 'Chemin' && $key != 'Chemin_img') {
				echo '<th scope="col">'.$key.'</th>';
			}			
		}
		echo '</tr></thead>';

		for ($i=0; $i <sizeof($_SESSION["tableShow"]) ; $i++) {
			echo '<tr>';
			echo '<td><input type="checkbox" value="" ></td>';
			echo array_key_exists('Chemin', $_SESSION["tableShow"][$i])?'<td><a href="'.$_SESSION["tableShow"][$i]['Chemin'].'" target="_blank"><i class=fas>&#xf06e;</i></a></td>':"";
			echo array_key_exists('Chemin_img', $_SESSION["tableShow"][$i])?'<td><a href="/visiteur/VUE/image/projets/'.$_SESSION["tableShow"][$i]['Chemin_img'].'" target="_blank" id="show"><i class=fas>&#xf06e;</i></a></td>':"";
			echo '<td><a href="#" class="del"><i class="fas">&#xf1f8</i></a></td>';
			foreach ($_SESSION["tableShow"][$i] as $key => $value) {
				if ($key != 'Chemin'&& $key != 'Chemin_img') {
					echo '<td>'.$value.'</td>';
				}
			}
			echo '</tr>';
		}	
	
 

 ?>
	</table>
	<form id="hiddenForm" action="" data-Type="" data-Table="<?php echo $_SESSION["table"]; ?>">
		<input type="hidden" id="dataHidden" name="ID_<?php echo $_SESSION["table"]; ?>">
	</form>
</div>
<div class="retour"></div>
<?php 
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/footer.php');
	include ($_SERVER['DOCUMENT_ROOT'].'/admin/VUE/php/Starter/script.php');
	echo "\n";
?>
<script type="text/javascript">

	$.each($('.del'), function(index, val) {
	 $(this).click(function(event) {
		event.preventDefault();
		var x = <?php echo json_encode($_SESSION["tableShow"]); ?>;
		var conf = confirm("Voulez vous vraiment supprimer le projets N°"+x[index]['<?php echo('ID_'.$_SESSION["table"]);?>']);
		if (conf) {
			console.log(x);
			$("#hiddenForm").attr('data-Type', 'deleteData');
			$("#dataHidden").attr('value', x[index]['<?php echo('ID_'.$_SESSION["table"]);?>']);
			//console.log($("#dataHidden"));
			new Form(document.getElementById("hiddenForm")).Ajxsend();
			selectedTable('<?php echo($_SESSION["table"]);?>');	
		}

	});
});
</script>

</body>
</html>
