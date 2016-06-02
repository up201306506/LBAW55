<?php	
	function getClassOwnerID($classid) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT directorid 
	                            FROM class
								WHERE classid = ?");
	    $stmt->execute(array($classid));
	    return $stmt->fetch();
 	}

?>