<?php 
	/**
	 * Fonction qui demare un session si ce n'est pas le cas
	 */
/*function is_session_started(){
    if ( php_sapi_name() !== 'cli' ) {
    	return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
    }else{
    	return FALSE;
    }    
}*/
	/**
	 * Class BDD contient les informations de connexion.
	 	-Elle permet d'utiliser toute les fonction CRUD
	 	-Elle permet de verifier les information de l'utilisateur
	 */
	class ClassBDD 
	{
		private $_servername = "localhost";
		private $_username = "root";
		private $_password = "";
		private $_dbname = 'tranchot_portfolio';
		private $_table;
		private $_query;
		
		function __construct($tablName = "",$query = "")
		{
			$this->setTable($tablName);
			$this->setQuery($query);
			$this->connect();
		}

		private function setTable($tablName)
		{
			$this->_table = $tablName;
		}

		private function setQuery($queryArray)
		{
			$this->_query = $queryArray;
		}

		private function connect()
		{
			try {
			    $conn = new PDO("mysql:host=$this->_servername;dbname=$this->_dbname", $this->_username, $this->_password);
			    // set the PDO error mode to exception
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $conn->exec("SET NAMES 'UTF8'");
			    //echo "Connected successfully";
			    return $conn;
			    }
			catch(PDOException $e)
			    {
			    echo "Connection failed: " . $e->getMessage();
			    }
		}

		public function adminCon()	
		{
			if (isset($_POST['email']) && isset($_POST['password'])) {
				$formMail = $_POST['email'];
				$formPassword = $_POST['password'];
				$conn = $this->connect();
				//Sélectionne l'adresse mail et le mdp de toute la table
				$stmt = $conn->prepare('SELECT Mail,Identifiant,Password FROM admin WHERE Mail = ? OR Identifiant = ?');
		    	$stmt->execute([$formMail,$formMail]);
		    	 // Récupére les données retourner par la BDD
		    	$result = $stmt->fetchall(PDO::FETCH_ASSOC);
		    	$conn = null;
					if (empty($result)) {
						echo json_encode("adresse mail ou identifiant incorecte");
						}else {
							foreach ($result as $key => $value) {
								if ($key == 'Password' && strcmp($value['Password'],$formPassword)=== 0) {
									$data = array('retour' => 'accueil','lien' => '/admin/VUE/php/Dashboard/accueil.php' );
									$_SESSION["connexion"] = $result;
									echo json_encode($data);
									break;
								}else {
									echo json_encode("Mot de passe incorecte");
									break;
								}
							}
						}
			}else{
				echo json_encode("veuillez remplir corectement le formulaire s'il vous plait");
			};
		}

		public function createtData($arrayTuple)
		{
			$sql= 'INSERT INTO ';
			$sql.="`".$this->_table."`";
			$sql.=' (';
			foreach ($arrayTuple as $key => $value) {
				$sql.=" `".$key."`,";
			}		
			$sql= trim($sql,',');
			$sql.=') VALUES (';
			foreach ($arrayTuple as $key => $value) {
				if (is_string($value)) {
					$sql.=" '".$value."',";
				}else {
					$sql.=" ".$value.",";
				}						
			}
			$sql= trim($sql,' ');
			$sql= trim($sql,',');
			$sql.=');';
			try {
				$conn = $this->connect();
			    $conn->exec($sql);
			    }
			catch(PDOException $e)
			    {
			    echo $sql . "<br>" . $e->getMessage();
			    }
			$conn = null;
		}

				
		public function readData($val,$table,$index,$arrayCol = array("*"))
		{
			$sql= 'SELECT ';
			foreach ($arrayCol as $key => $value) {
				$sql.="`".$value."`,";
			}
			$sql= trim($sql,' ');
			$sql= trim($sql,',');			
			$sql.=' FROM ';
			$sql.='`'.$table.'`';
			if (is_string($val)) {
				$sql.= ' WHERE `'.$index.'`="'.$val.'"';
			}else{
				$sql.= ' WHERE `'.$index.'`='.$val.'';
			}
			

			try {
				$conn = $this->connect();
			    $stmt = $conn->prepare($sql);
			    $stmt->execute();
			    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
			    }
			catch(PDOException $e)
			    {
			    echo $sql . "<br>" . $e->getMessage();
			    }
			$conn = null;
			return  $result;
		}

		public function selectAll()
		{
			$sql= 'SELECT * FROM ';
			$sql.=$this->_table;
			try {
				$conn = $this->connect();
			    $stmt = $conn->prepare($sql);
			    $stmt->execute();
			    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
			    }
			catch(PDOException $e)
			    {
			    echo $sql . "<br>" . $e->getMessage();
			    }
			$conn = null;
			return  $result;
		}

		public function updateData($arrayTuple)
		{
			$sql= 'UPDATE ';
			$sql.=$this->_table;
			$sql.=' SET';
			foreach ($arrayTuple as $key=>$value){
					$sql.=" ".$key."='".$value."', ";				
			};
			$sql= trim($sql,' ');
			$sql= trim($sql,',');
			$sql.= ' WHERE `'.$this->_table.'`.`ID_'.$this->_table.'`='.$arrayTuple["ID_Admin"].';';

			try {
				$conn = $this->connect();
			    $conn->exec($sql);
			    echo "New record created successfully";
			    }
			catch(PDOException $e)
			    {
			    echo $sql . "<br>" . $e->getMessage();
			    }
			$conn = null;
		}

		public function deleteData($arrayTuple)
		{
			$sql= 'DELETE FROM ';
			$sql.='`'.$this->_table.'`';
			$sql.= ' WHERE `'.$this->_table.'`.`ID_'.$this->_table.'` = '.$arrayTuple["ID_".$this->_table].';';
			try {
				$conn = $this->connect();
			    $stmt = $conn->prepare($sql);
			    $stmt->execute();
			    }
			catch(PDOException $e)
			    {
			    echo $sql . "<br>" . $e->getMessage();
			    }
			$conn = null;
		}

		public function listTab($dbname='tranchot_portfolio')
		{
			$sql = "SHOW TABLES FROM `".$dbname."`";
			try {
				$conn =  $this->connect();
				$stmt = $conn->prepare($sql);
				$stmt->execute();
			    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
			    }
			catch(PDOException $e)
			    {
			    echo $sql . "<br>" . $e->getMessage();
			    }
			$conn = null;
			return  $result;
		}
	};


?>

