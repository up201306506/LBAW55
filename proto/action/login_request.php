<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (isset($_POST['username']) || isset($_POST['password'])) {
		$user = isLoginCorrect($_POST['username'], $_POST['password']);

		if (isset($user)) {
			if ($user['isactive'] === 'Active') {
				$_SESSION['userid'] = $user['userid'];
				$_SESSION['success_messages'][] = 'active';
				$_SESSION['success_messages'][] = 'login successful';
				header('Location: '. $BASE_URL .'profile/profile.php');	
			} else {
				$_SESSION['error_messages'][] = 'User account still pending!';
				header('Location: ' . $_SERVER['HTTP_REFERER']);
			}
		} else {
			$_SESSION['error_messages'][] = 'Wrong Login Credentials';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	} else {
		$_SESSION['error_messages'][] = 'Fill all input fields';
		$_SESSION['form_values'] = $_POST;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

?>