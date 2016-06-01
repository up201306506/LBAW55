<?php	
	function getAllExams() {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM exam
								ORDER BY examidentification ASC");
	    $stmt->execute();
	    return $stmt->fetchAll();
 	}

?>