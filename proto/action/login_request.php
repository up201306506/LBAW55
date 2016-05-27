<?php
	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	 if (!$_POST['username'] || !$_POST['password']) {
	    $_SESSION['error_messages'][] = 'Fill all input fields';
	    $_SESSION['form_values'] = $_POST;
	    header('Location: ' . $_SERVER['HTTP_REFERER']);
	    exit;
	  }

	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  
	  $user = isLoginCorrect($username, $password);
	  if ($user) {		
		if($user['isactive'] === 'Active'){
			$_SESSION['success_messages'][] = 'active';
			$_SESSION['username'] = $user['username'];
			$_SESSION['accounttypevar'] = $user['accounttypevar'];
			$_SESSION['description'] =  $user['description'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['name'] =  $user['name'];

			$_SESSION['success_messages'][] = 'login successful';
			header('Location: '. $BASE_URL .'profile/profile.php');	
		}else{
			$_SESSION['error_messages'][] = 'User account still pending!';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}	
	  } else {
	    $_SESSION['error_messages'][] = 'Wrong Login Credentials';
	  	header('Location: ' . $_SERVER['HTTP_REFERER']);
	  }
?>