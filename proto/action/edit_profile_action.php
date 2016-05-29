<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['name'])) {
		updateName($_POST['name'], $_SESSION['userid']);
		header('Location: ../profile/profile.php');
	} else if (!empty($_POST['email'])) {
		updateEmail($_POST['email'], $_SESSION['userid']);
		header('Location: ../profile/profile.php');
	} else if (!empty($_POST['password']) && !empty($_POST['re-password'])) {
		updatePassword($_POST['password'], $_SESSION['userid']);
		header('Location: ../profile/profile.php');
	} else if (!empty($_POST['description'])) {
		updateDescription($_POST['description'], $_SESSION['userid']);
		header('Location: ../profile/profile.php');
	} else {
		header('Location: ../profile/edit_profile.php');
	}

?>