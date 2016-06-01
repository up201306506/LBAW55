<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['name'])) {
		updateName($_POST['name'], $_SESSION['userid']);
		$_SESSION['error_messages'][] = 'name updated';
		header('Location: ../profile/profile.php');
	} else if (!empty($_POST['email'])) {
		updateEmail($_POST['email'], $_SESSION['userid']);
		$_SESSION['error_messages'][] = 'email updated';
		header('Location: ../profile/profile.php');
	} else if (!empty($_POST['password']) && !empty($_POST['re-password'])) {
		if ($_POST['password'] === $_POST['re-password']) {
			updatePassword($_POST['password'], $_SESSION['userid']);
			$_SESSION['error_messages'][] = 'password updated';
			header('Location: ../profile/profile.php');
		} else {
			$_SESSION['error_messages'][] = 'passwords are not equal';
			header('Location: ../profile/edit_profile.php');
		}
	} else if (!empty($_POST['description'])) {
		$_SESSION['error_messages'][] = 'description updated';
		updateDescription($_POST['description'], $_SESSION['userid']);
		header('Location: ../profile/profile.php');
	}

?>