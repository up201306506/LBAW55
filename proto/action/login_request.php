<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$user = isLoginCorrect($_POST['username'], $_POST['password']);

		if (!empty($user)) {
			if ($user['isactive'] === 'Active') {
				$_SESSION['userid'] = $user['userid'];
				$_SESSION['error_messages'][] = 'noice';
				header('Location: ../profile/profile.php');
			} else {
				$_SESSION['error_messages'][] = 'pending';
				header('Location: ../login_signup.php');
			}
		} else {
			$_SESSION['error_messages'][] = 'no user like that';
			header('Location: ../login_signup.php');
		}
	} else {
		$_SESSION['error_messages'][] = 'fill input fields';
		header('Location: ../login_signup.php');
	}

?>