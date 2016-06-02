<?php	
	function getAllExams() {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM exam
								ORDER BY examidentification ASC");
	    $stmt->execute();
	    return $stmt->fetchAll();
 	}
	
	function getExamsClassID($examid) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM exam, class
								WHERE examid = ?");
	    $stmt->execute(array($examid));
	    return $stmt->fetch();
 	}

?>