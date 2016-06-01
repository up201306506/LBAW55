<?php	
	function getUnvalidatedProfessors(){
		global $conn;
		$stmt = $conn->prepare("SELECT name,username, email
								FROM users
								WHERE accounttypevar  = 'Professor'
								AND isactive  = 'Pending'
								");
		$stmt->execute();
		return $stmt->fetchAll();
	}
?>