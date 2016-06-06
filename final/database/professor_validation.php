<?php	
	function getUnvalidatedProfessors(){
		global $conn;
		$stmt = $conn->prepare("SELECT userid,name,username, email
								FROM users
								WHERE accounttypevar  = 'Professor'
								AND isactive  = 'Pending'
								");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function validateProfessor($userId){
		global $conn;
	    $stmt = $conn->prepare("UPDATE users 
								SET isactive = 'Active' 
								WHERE userid  = ?");
	    $stmt->execute(array($userId));
		$count = $stmt->rowCount();
		return $count == 1;
	}
	
?>