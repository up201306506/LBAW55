<?php	
	function getClassOwnerID($classid) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT directorid 
	                            FROM class
								WHERE classid = ?");
	    $stmt->execute(array($classid));
	    return $stmt->fetch();
 	}

	function getClassByOwnerID($userid) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT *, class.directorid AS profid, class.password AS classpass
	                            FROM class, users
								WHERE directorid = ?
								AND userid = directorid");
	    $stmt->execute(array($userid));
	    return $stmt->fetchAll();
 	}
	
	function getClassByManagerID($userid) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT *, class.directorid AS profid, class.password AS classpass
	                            FROM class, professormanagesclass, users
								WHERE class.classid = professormanagesclass.classid
								AND professormanagesclass.userid = ?
								AND professormanagesclass.userid = users.userid");
	    $stmt->execute(array($userid));
	    return $stmt->fetchAll();
 	}


	
?>