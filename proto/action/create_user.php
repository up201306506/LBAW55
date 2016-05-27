<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');
	
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['opUsertype'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
	    $username = $_POST['username'];
		$password = $_POST['password'];
		$usertype = $_POST['opUsertype'];
		
		$isactive = 'Active';
		if ($usertype === "Professor") {
			$isactive = 'Pending';
		}
		
		try {
			$user = insertNewUser($username, $email, $password, $usertype, $name, $isactive);
			$_SESSION['success_messages'][] = 'Register successful';

			if ($user['isactive'] === 'Active'){
				$_SESSION['username'] = $user['username'];
				$_SESSION['accounttypevar'] = $user['accounttypevar'];
				$_SESSION['description'] =  $user['description'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['name'] =  $user['name'];

				header('Location: '. $BASE_URL .'profile/profile.php');	
			} else {
				$_SESSION['error_messages'][] = 'User account is pending!';
				header('Location: ' . $_SERVER['HTTP_REFERER']);  
			}
		} catch (PDOException $Exception) {
			$_SESSION['error_messages'][] = 'Register Failed';// send message by the error code (need to be changed)
			$_SESSION['form_values'] = $_POST;
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	} else {
		$_SESSION['error_messages'][] = 'Fill all input fields';
	    $_SESSION['form_values'] = $_POST;
	    header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
?>