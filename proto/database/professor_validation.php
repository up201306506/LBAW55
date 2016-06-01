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
	
	function checkValidation($userId){
		global $conn;
	    $stmt = $conn->prepare("SELECT accounttypevar,isactive
								FROM users
								WHERE userid  = ?");
	    $stmt->execute(array($userId));
		return ($stmt->fetch()['accounttypevar'] == 'Professor' && $stmt->fetch()['isactive'] == 'Active');
	}
?>