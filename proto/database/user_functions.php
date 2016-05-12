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

	function isLoginCorrect($username, $password) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE username = ? AND password = ?");// needs the isActive contrain
	    $stmt->execute(array($username, $password));// sha1($password)
	    return $stmt->fetch();
 	}

	function existsUser($username){
		global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM users 
	                            WHERE username = ?");// needs the isActive contrain
	    $stmt->execute(array($username));// sha1($password)
	    return $stmt->fetch() == true;
	}
	
	function insertNewUser($username, $email, $password, $usertype, $name, $isactive){
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO users (username,accounttypevar,description,email,name,password,isActive) VALUES (:username, :usertype, 'Please insert a description', :email, :name, :password, :isactive)");// needs the isActive contrain
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':usertype', $usertype);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':isactive', $isactive);
		$stmt->execute();
	}
	
	function updateUserName($oldname,$username){
		global $conn;
	    $stmt = $conn->prepare('UPDATE users SET username = ? WHERE username = ?');
		$stmt->execute(array($username,$oldname));
	}

/*	function updateUserEmail($userName,$email){
			//UPDATE "User" SET name = '%%%' WHERE username = '%%%';
			//UPDATE "User" SET password = '%%%' WHERE username = '%%%';
			//UPDATE "User" SET description = '%%%' WHERE username = '%%%';
	}

	function updatePassword($userName,$password){
	}
*/
?>