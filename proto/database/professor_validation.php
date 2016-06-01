<?php	

	function getUnvalidatedProfessors(){
		global $conn;
		$stmt = $conn->prepare("SELECT userId,name,username, email
								FROM users
								WHERE accounttypevar  = 'Professor'
								AND isactive  = 'Pending'
								");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function validateProfessor($username){
		global $conn;
	    $stmt = $conn->prepare("UPDATE users 
								SET isactive = 'Active' 
								WHERE username  = ?");
	    return $stmt->execute(array($username));
		
	}
?>