<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');
	include_once('../action/session_check.php');
	
	if($user_type == 'Student'){
		$_SESSION['error_messages'][] = 'You can not create classes on a Student account';
		header('Location: '.$BASE_URL.'/profile/profile.php');
	}
	
	
	if (!empty($_POST['classname']) && !empty($_POST['password']) && !empty($_POST['re-password']) && !empty($_POST['description'])) {
		
		
	} else {
		$_SESSION['error_messages'][] = 'fill input fields';
		header('Location: ../login_signup.php');
	}

?>