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

	include_once('../config/init.php');	

/*
	function isLoginCorrect($username, $password) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM User 
	                            WHERE username = '?' AND password = ?");// needs the isActive contrain
	    $stmt->execute(array($username, $password));// sha1($password)
	    return $stmt->fetch() == true;
 	}

	 if (!$_POST['username'] || !$_POST['password']) {
	    $_SESSION['error_messages'][] = 'Invalid login';
	    $_SESSION['form_values'] = $_POST;
	   // header('Location: ' . $_SERVER['HTTP_REFERER']);
	    echo '<script type="text/javascript">alert(" failed to login "); </script>';
	    exit;
	  }

	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  
	  if (isLoginCorrect($username, $password)) {
	    $_SESSION['username'] = $username;
	    $_SESSION['success_messages'][] = 'Login successful';  
	  } else {
	    $_SESSION['error_messages'][] = 'Login failed';  
	  }
	  header('Location: ' . $_SERVER['HTTP_REFERER']);
*/

 
	  $stmt = $conn->prepare('SELECT * FROM User WHERE username = :user'); 
	  $username = $_POST['username'];
	  $stmt->bindParam(':user', $username); 
	  $stmt->execute();

	  while (($row = $stmt->fetch()) != false)
	  {
	  	echo '<p>nova linha<br></p>';
	   echo '<script type="text/javascript">alert(" username: '.json_encode($row).' "); </script>';
	  }

?>