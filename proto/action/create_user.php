<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['usertype'])) {
		$isactive = 'Active';
		if ($_POST['usertype'] === 'Professor') {
			$isactive = 'Pending';
		}

		$user = insertNewUser($_POST['username'], $_POST['email'], $_POST['password'], $_POST['usertype'], $_POST['name'], $isactive);
		if (!empty($user)) {
			if ($user['isactive'] === 'Active'){
				$_SESSION['userid'] = $user['userid'];
				$_SESSION['error_messages'][] = 'noice';
				header('Location: ../profile/profile.php');
			} else {
				$_SESSION['error_messages'][] = 'pending';
				header('Location: ../login_signup.php');
			}
		} else {
			$_SESSION['error_messages'][] = 'didnt work';
			header('Location: ../login_signup.php');
		}
	} else {
		$_SESSION['error_messages'][] = 'fill input fields';
		header('Location: ../login_signup.php');
	}

?>