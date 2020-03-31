		public function set()
		{
			//echo $this->_dataForm;
			foreach ($this->_dataForm as $key=>$value){
			  if (!empty($_POST[$key])) {
			    $this->_dataForm[$key] = $_POST[$key];
			    echo $value;    
			  }else {
			    $value = "";
			  };
			};
			//var_dump( $this->_dataForm);
			return $this->_dataForm;
		}
	};

//Créer tableaux
	<table>
		<tr>
<?php 
	foreach ($test[0] as $key => $value) {
		echo '<th>'.$key.'</th>';
	}
	echo '</tr>';


		</tr>
<?php 
//SELECT`Nom_Page`, `Chemin`, `Niveau`, `ID_Template` FROM `liste_page` WHERE 1
//SELECT`Nom_Page`,`Chemin`,`Niveau` FROM `media` WHERE `Niveau`=2

for ($i=0; $i <sizeof($test) ; $i++) {
	echo '<tr>';
	foreach ($test[$i] as $key => $value) {
		echo '<td>'.$value.'</td>';
	}
	echo '</tr>';
}
 ?>
	</table>
</div>

<?php 

	//Cette fonction permet d'établir un filtre pour le niveau des pages chaque clé corespondra à un niveau
	function filterNIveau($result){
		$filterNIveau = array();
		for ($i=1; $i < sizeof($result) ; $i++) {
			${"niveau".$i} =  array(); 
				foreach ($result as $key => $value) {
					if ($value['Niveau'] == $i) {
						array_push(${"niveau".$i}, $value);
					}
				}
				$filterNIveau['niveau'.$i]=${"niveau".$i};			
		};
		// array_filter permet de suprimer les valeur vide générer par la boucle for
		$filterNIveau = array_filter($filterNIveau);	
		return $filterNIveau;
	};
	//Cette fonction permet d'afficher au format html dans un tableau l'arboresence du site un rajoutant un retrai à la ligne en fonction du niveau
	function arborescence($result){
		$filterNIveau = filterNIveau($result);
		for ($i=2; $i < sizeof($filterNIveau)+1 ; $i++) {
			foreach ($filterNIveau['niveau1'] as $key => $value) {
				echo '	<tr class="'.$value['Nom_Page'].'">'."\n".'		<td><a href="'.$value['Chemin'].'" id="'.$value['Nom_Page'].'" target="_blank">'.ucfirst($value['Nom_Page']).'</a></td>'."\n".'		<td><a href="" data-lien-page="'.$value['Chemin'].'" class="modif">Modifier</a></td>'."\n".'		<td>Suprimer</td>'."\n".'	</tr>'."\n";
			}
			foreach ($filterNIveau['niveau'.$i] as $key => $value) {
				echo '	<tr class="'.$value['Parent'].'">'."\n".'		<td  style="text-indent:'. 25*$i.'px"><a href="'.$value['Chemin'].'" id="'.$value['Nom_Page'].'" target="_blank">'.ucfirst($value['Nom_Page']).'</a></td>'."\n".'		<td><a href="" data-lien-page="'.$value['Chemin'].'" class="modif">Modifier</a></td>'."\n".'		<td>Suprimer</td>'."\n".'	</tr>'."\n";
					}
		}
	};

?>