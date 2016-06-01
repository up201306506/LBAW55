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
	
	function validateProfessor($userId){
		global $conn;
	    $stmt = $conn->prepare("UPDATE users 
								SET isactive = 'Active' 
								WHERE userId  = ?");
	    return $stmt->execute(array($userId));
		
	}
	
	function checkValidation($userId){
		global $conn;
	    $stmt = $conn->prepare("SELECT accounttypevar,isactive
								FROM users
								WHERE userId  = ?");
	    $stmt->execute(array($userId));
		return ($stmt->fetch()['accounttypevar'] == 'Professor' && $stmt->fetch()['isactive'] == 'Active');
	}
?>