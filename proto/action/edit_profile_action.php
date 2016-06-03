<?php

	$error;

	if (isset($_POST['edit-name'])) {
		if (!empty($_POST['name'])) {
			updateName($_POST['name'], $_SESSION['userid']);
			header('Location: profile.php');
		} else {
			$error = 'You new name can\'t be empty!';
		}
	} else if (isset($_POST['edit-email'])) {
		if (!empty($_POST['email'])) {
			updateEmail($_POST['email'], $_SESSION['userid']);
			header('Location: profile.php');
		} else {
			$error = 'You new email can\'t be empty!';
		}
	} else if (isset($_POST['edit-password'])) {
		if (!empty($_POST['password']) && !empty($_POST['re-password'])) {
			if ($_POST['password'] === $_POST['re-password']) {
				updatePassword($_POST['password'], $_SESSION['userid']);
				header('Location: profile.php');
			} else {
				$error = 'Your confirmation password is different!';
			}
		} else {
			$error = 'Please fill in both input fields!';
		}
	} else if (isset($_POST['edit-description'])) {
		if (!empty($_POST['description'])) {
			updateDescription($_POST['description'], $_SESSION['userid']);
			header('Location: profile.php');
		} else {
			$error = 'You new description can\'t be empty!';
		}
	}/* else if (isset($_POST['edit-profile-pic'])) {
		
	}*/

?>