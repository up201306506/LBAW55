<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	try {
		if (isset($_POST['name'])) {
			updateName($_POST['name'], $_SESSION['username']);
			$_SESSION['success_messages'][] = 'name updated successfully';
			header('Location: ' . $BASE_URL . 'profile/profile.php');
		}

		if (isset($_POST['email'])) {
			updateEmail($_POST['email'], $_SESSION['username']);
			$_SESSION['success_messages'][] = 'email updated successfully';
			header('Location: ' . $BASE_URL . 'profile/profile.php');
		}

		if (isset($_POST['password']) && isset($_POST['re-password'])) {
			if ($_POST['password'] === $_POST['re-password']) {
				updatePassword($_POST['password'], $_SESSION['username']);
				$_SESSION['success_messages'][] = 'password updated successfully';
				header('Location: ' . $BASE_URL . 'profile/profile.php');
			}
		}

		if (isset($_POST['description'])) {
			updateDescription($_POST['description'], $_SESSION['username']);
			$_SESSION['success_messages'][] = 'description updated successfully';
			header('Location: ' . $BASE_URL . 'profile/profile.php');
		}

		// if (isset($_POST['upload_img'])) {
		// 	header('Location: ' . $BASE_URL . 'profile/profile.php');
		// }
	} catch (PDOException $Exception) {
		$_SESSION['error_messages'][]  = 'Error occured while updating.';
		header('Location: ' . $BASE_URL . 'profile/profile.php');
	}

?>