<?php

// Se connecte à la DB
// Paramètres : nom de la base -> $name_DB
function connexion_DB($name_DB) {
// Déclaration des paramètres de connexion
	$host = "localhost";  
	$user = "root";
	$bdd = $name_DB;
	$passwd  = "";
// Connexion au serveur
	mysqli_connect($host, $user,$passwd,$bdd) or die("erreur de connexion au serveur");
}

// --------------------------------------------------------------------------------------------------------------------------
// Deconnection de la DB
function deconnexion_DB() {
	mysql_close();
}

// --------------------------------------------------------------------------------------------------------------------------
// Exécute une requète SQL. Si la requête ne passe pas, renvoir le message d'erreur MySQL
// Paramètres : chaine SQL -> $strSQL
// Renvoie : enregistrements correspondants -> $result
function requete_SQL($strSQL) {
	$result = mysqli_query($strSQL);
	if (!$result) {
		$message  = 'Erreur SQL : ' . mysql_error() . "<br>\n";
		$message .= 'SQL string : ' . $strSQL . "<br>\n";
		$message .= "Merci d'envoyer ce message au webmaster";
		die($message);
	}
	return $result;
}


// Récupère les informations de la page concernée
function extraction_infos_DB() {
	$strSQL = 'SELECT * FROM `pages` WHERE `Id_page` = '.$_ENV['id_page'];
	$resultat = requete_SQL($strSQL);
	$tabl_result = mysql_fetch_array($resultat);
	$_ENV['mots_cles'] = $tabl_result['Mots_cles'];
	$_ENV['description'] = $tabl_result['Description'];
	$_ENV['titre'] = $tabl_result['Titre'];
	$_ENV['contenu'] = $tabl_result['Contenu'];
	$_ENV['id_parent'] = $tabl_result['Id_parent'];
}
?>