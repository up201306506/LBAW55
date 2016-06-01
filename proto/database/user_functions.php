<?php

	function getUser($username) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE username = ?");
	    $stmt->execute(array($username));
	    return $stmt->fetch();
 	}

 	function getExamsByUser($userid) {
 		global $conn;
 		$stmt = $conn->prepare("");
 		$stmt->execute(array($userid));
 		return $stmt->fetch();
 	}

 	function getClassesByUser($userid) {
 		global $conn;
 		$stmt = $conn->prepare("");
 		$stmt->execute(array($userid));
 		return $stmt->fetch();
 	}

 	function getAllClasses() {
 		global $conn;
 		$stmt = $conn->prepare("SELECT classname, name, class.password AS classpass
 								FROM class, users
 								WHERE class.directorid = users.userid");
 		$stmt->execute();
 		return $stmt->fetchAll();
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
?>