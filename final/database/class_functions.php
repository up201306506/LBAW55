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
 
	function checkStudentBelongsClass($userid, $classid){
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM userclass
								WHERE userid = ?
								AND classid = ?");
		$stmt->execute(array($userid, $classid));
		return $stmt->fetch() == true;
	}
	
	function checkProfessBelongsClass($userid, $classid){
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM class
								WHERE classid = ?
								AND directorid = ?");
		$stmt->execute(array($classid, $userid));
		$result1 = $stmt->fetch();
		$stmt = $conn->prepare("SELECT *
								FROM professormanagesclass
								WHERE classid = ?
								AND userid = ?");
		$stmt->execute(array($classid, $userid));
		$result2 = $stmt->fetch();
		
		return ($result1 == true || $result2 == true);
	}
	
	function checkClassRequiresPassword($classid){
		global $conn;
		$stmt = $conn->prepare(" SELECT password
								FROM class
								WHERE classid = ?");
		$stmt->execute(array($classid));
		return $stmt->fetch() == true;
	}
	
?>