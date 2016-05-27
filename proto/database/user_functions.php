<?php

	/*
	CREATE TABLE User (
	userId SERIAL PRIMARY KEY,
	username TEXT NOT NULL UNIQUE,
	accountType ACCOUNTTYPE,
	description TEXT NOT NULL CHECK (description.length >= 0 && description.length < 500),
	email TEXT NOT NULL,
	name TEXT NOT NULL,
	password TEXT NOT NULL CHECK (password.length >= 5),
	isActive USERACTIVE
	);
	*/	

	function getUser($username) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE username = ?");
	    $stmt->execute(array($username));
	    return $stmt->fetch();
 	}
	
	function isLoginCorrect($username, $password) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE username = ? AND password = ?");// needs the isActive contrain
	    $stmt->execute(array($username, hash('sha256', $password)));// sha1($password)
	    return $stmt->fetch();
 	}

	function existsUser($username) {
		global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE username = ?");// needs the isActive contrain
	    $stmt->execute(array($username));// sha1($password)
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
	
	function updateName($username, $name) {
		global $conn;
	    $stmt = $conn->prepare("UPDATE users SET name = ? WHERE username = ?");
		$stmt->execute(array($name,$username));
	}

	function updateUserEmail($username,$email) {
		global $conn;
	  	$stmt = $conn->prepare("UPDATE users SET email = ? WHERE username = ?");
		$stmt->execute(array($email,$username));
	}

	function updatePassword($username,$password) {
		global $conn;
	  	$stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
		$stmt->execute(array(hash('sha256', $password),$username));
	}

	function updateDescription($username,$description) {
		global $conn;
	  	$stmt = $conn->prepare("UPDATE users SET description = ? WHERE username = ?");
		$stmt->execute(array($description,$username));
	}

	function getDescription($username) {
		global $conn;
	    $stmt = $conn->prepare("SELECT description 
	                            FROM users 
	                            WHERE username = ?");// needs the isActive contrain
	    $stmt->execute(array($username));// sha1($password)
	    return $stmt->fetch()['description'];
	}
?>