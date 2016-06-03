<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');
	include_once('../action/session_check.php');
	include_once('../database/class_functions.php');
	
	if($user_type == 'Student'){
		$_SESSION['error_messages'][] = 'You can not create classes on a Student account';
		header('Location: '.$BASE_URL.'/profile/profile.php');
		exit;
	}
	
	
	if (!empty($_POST['classname'])) {
		
		$directorid = $_SESSION['userid'];
		if(insertNewClass($directorid, $_POST['classname'], $_POST['password'], $_POST['description'])){
			$_SESSION['error_messages'][] = 'class created';
			header('Location: '.$BASE_URL.'/profile/profile.php');
		}
		else {
			$_SESSION['error_messages'][] = 'something went wrong creating the class';
			header('Location: '. $_SERVER['HTTP_REFERER']);
		}
	} else {
		$_SESSION['error_messages'][] = 'fill input fields';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

?>