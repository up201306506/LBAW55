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

	// function insertNewClass($directorid, $classname, $password, $description) {
	//     global $conn;
	// 	if(isset($password))
	// 		$password_n = $password;
	// 	else
	// 		$password_n = '';
		
	// 	echo $directorid;
	// 	echo $classname;
	// 	echo $password_n; 
	// 	echo $description;
		
	// 	if(isset($description)){
	// 		$stmt = $conn->prepare("INSERT INTO class 
	// 						(directorId,classname,password, description) 
	// 						VALUES (?,?,?,?)");
	// 		return $stmt->execute(array($directorid, $classname, $password_n, $description));
	// 	}
	// 	$stmt = $conn->prepare("INSERT INTO class 
	// 		(directorId,classname,password) 
	// 		VALUES (?,?,?)");
	//     return $stmt->execute(array($directorid, $classname, $password_n));
		
	   
 // 	}
 
	function checkStudentBelongsClass($userid, $classid){
		global $conn;
		$stmt = $conn->prepare(" SELECT *
								FROM userclass
								WHERE userid = ?
								AND classid = ?");
		$stmt->execute(array($userid, $classid));
		return $stmt->fetch() == true;
	}
	
	/*
	function checkProfessBelongsClass($userid, $classid){
		global $conn;
		
		
	}
	*/
	
?>