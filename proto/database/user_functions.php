<?php

	function getUser($username) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE username = ?");
	    $stmt->execute(array($username));
	    return $stmt->fetch();
 	}
	
	function getAllUsers() {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE accounttypevar != 'Administrator' 
								ORDER BY username ASC");
	    $stmt->execute();
	    return $stmt->fetchAll();
 	}

 	function getAllClasses() {
 		global $conn;
 		$stmt = $conn->prepare("SELECT classid, classname, userid, name, class.password AS classpass
 								FROM class, users
 								WHERE directorid = userid");
 		$stmt->execute();
 		return $stmt->fetchAll();
 	}

 	function getClassById($classid) {
 		global $conn;
 		$stmt = $conn->prepare("SELECT *
 								FROM class
 								WHERE classid = ?");
 		$stmt->execute(array($classid));
 		return $stmt->fetch();
 	}

 	function getAllCategories() {
 		global $conn;
 		$stmt = $conn->prepare("SELECT * FROM category");
 		$stmt->execute();
 		return $stmt->fetchAll();
 	}
	
 	function getManagerOfClass($userid) {
 		global $conn;
 		$stmt = $conn->prepare("SELECT name
 								FROM users
 								WHERE userid = ?");
 		$stmt->execute(array($userid));
 		return $stmt->fetch();
 	}

 	function getClassProfessors($classid) {
 		global $conn;
 		$stmt = $conn->prepare("SELECT users.userid AS userid, name, accounttypevar
 								FROM professormanagesclass, users
 								WHERE classid = ?
 								AND professormanagesclass.userid = users.userid");
 		$stmt->execute(array($classid));
 		return $stmt->fetchAll();
 	}

 	function getClassStudents($classid) {
 		global $conn;
 		$stmt = $conn->prepare("SELECT users.userid AS userid, name, accounttypevar
 								FROM userclass, users
 								WHERE classid = ?
 								AND userclass.userid = users.userid");
 		$stmt->execute(array($classid));
 		return $stmt->fetchAll();
 	}

 	function getExamsOfClass($classid) {
 		global $conn;
 		$stmt = $conn->prepare("SELECT examid, examidentification, date, password
 								FROM exam
 								WHERE exam.classid = ?");
 		$stmt->execute(array($classid));
 		return $stmt->fetchAll();
 	}

 	function getExamsByUser($userid) {
 		global $conn;
 		$stmt = $conn->prepare("SELECT examid, examidentification, date, password
 								FROM userclass, exam
 								WHERE userclass.userid = ?
 								AND userclass.classid = exam.classid");
 		$stmt->execute(array($userid));
 		return $stmt->fetchAll();
 	}

 	function getClassesByUser($userid) {
 		global $conn;
 		$stmt = $conn->prepare("SELECT class.classid AS classid, classname, users.userid AS profid, name, class.password AS classpass
 								FROM userclass, class, users
 								WHERE userclass.userid = ?
 								AND userclass.classid = class.classid
 								AND class.directorid = users.userid");
 		$stmt->execute(array($userid));
 		return $stmt->fetchAll();
 	}

 	function getExamById($examid) {
 		global $conn;
 		$stmt = $conn->prepare("SELECT *
 								FROM exam
 								WHERE examid = ?");
 		$stmt->execute(array($examid));
 		return $stmt->fetch();
 	}

	function isLoginCorrect($username, $password) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE username = ? AND password = ?");
	    $stmt->execute(array($username, hash('sha256', $password)));
	    return $stmt->fetch();
 	}

	function existsUser($username) {
		global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE username = ?");
	    $stmt->execute(array($username));
	    return $stmt->fetch() == true;
	}
	
	function insertNewUser($username, $email, $password, $usertype, $name, $isactive) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO users (username,accounttypevar,description,email,name,password,isActive) VALUES (:username, :usertype, 'Please insert a description', :email, :name, :password, :isactive)");// needs the isActive contrain
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':usertype', $usertype);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':password', hash('sha256', $password));
		$stmt->bindParam(':isactive', $isactive);
		$stmt->execute();
		return getUser($username);
	}

	function insertNewQuestion($question, $categoryid) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO question (question,categoryid) VALUES (:question, :categoryid)");
		$stmt->bindParam(':question', $question);
		$stmt->bindParam(':categoryid', $categoryid);
		$stmt->execute();
	}

	function insertNewAnswer($answer) {

	}
	
	function updateName($name, $userid) {
		global $conn;
	    $stmt = $conn->prepare("UPDATE users SET name = ? WHERE userid = ?");
		$stmt->execute(array($name, $userid));
	}

	function updateEmail($email, $userid) {
		global $conn;
	  	$stmt = $conn->prepare("UPDATE users SET email = ? WHERE userid = ?");
		$stmt->execute(array($email, $userid));
	}

	function updatePassword($password, $userid) {
		global $conn;
	  	$stmt = $conn->prepare("UPDATE users SET password = ? WHERE userid = ?");
		$stmt->execute(array(hash('sha256', $password), $userid));
	}

	function updateDescription($description, $userid) {
		global $conn;
	  	$stmt = $conn->prepare("UPDATE users SET description = ? WHERE userid = ?");
		$stmt->execute(array($description, $userid));
	}

	function getUsername($userid) {
		global $conn;
	    $stmt = $conn->prepare("SELECT username 
	                            FROM users 
	                            WHERE userid = ?");
	    $stmt->execute(array($userid));
	    return $stmt->fetch()['username'];
	}

	function getName($userid) {
		global $conn;
	    $stmt = $conn->prepare("SELECT name 
	                            FROM users 
	                            WHERE userid = ?");
	    $stmt->execute(array($userid));
	    return $stmt->fetch()['name'];
	}

	function getEmail($userid) {
		global $conn;
	    $stmt = $conn->prepare("SELECT email 
	                            FROM users 
	                            WHERE userid = ?");
	    $stmt->execute(array($userid));
	    return $stmt->fetch()['email'];
	}

	function getAccountType($userid) {
		global $conn;
	    $stmt = $conn->prepare("SELECT accounttypevar 
	                            FROM users 
	                            WHERE userid = ?");
	    $stmt->execute(array($userid));
	    return $stmt->fetch()['accounttypevar'];
	}

	function getDescription($userid) {
		global $conn;
	    $stmt = $conn->prepare("SELECT description 
	                            FROM users 
	                            WHERE userid = ?");
	    $stmt->execute(array($userid));
	    return $stmt->fetch()['description'];
	}
	
	function banUser($userId){
		global $conn;
	    $stmt = $conn->prepare("UPDATE users 
								SET isactive = 'Inactive' 
								WHERE userid  = ?");
	    $stmt->execute(array($userId));
		$count = $stmt->rowCount();
		return $count == 1;
	}
?>