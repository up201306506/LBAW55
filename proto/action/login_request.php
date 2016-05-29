<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$user = isLoginCorrect($_POST['username'], $_POST['password']);

		if (!empty($user)) {
			if ($user['isactive'] === 'Active') {
				$_SESSION['userid'] = $user['userid'];
				header('Location: ../profile/profile.php');
			} else {
				header('Location: ../login_signup.php');
			}
		} else {
			header('Location: ../login_signup.php');
		}
	} else {
		header('Location: ../login_signup.php');
	}

?>