<?php

	$error;
	
	if (isset($_POST['login'])) {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$user = isLoginCorrect($_POST['username'], $_POST['password']);

			if (!empty($user)) {
				if ($user['isactive'] === 'Active') {
					$_SESSION['userid'] = $user['userid'];
					header('Location: profile/profile.php');
				} else {
					$error = 'Your account is still waiting for validation!';
				}
			} else {
				$error = 'Your username and/or password are wrong!';
			}
		} else {
			$error = 'Please fill in all input fields!';
		}
	} else if (isset($_POST['signup'])) {
		if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['usertype'])) {

			$isactive = 'Active';
			if ($_POST['usertype'] === 'Professor') {
				$isactive = 'Pending';
			}

			$user = insertNewUser($_POST['username'], $_POST['email'], $_POST['password'], $_POST['usertype'], $_POST['name'], $isactive);
			if (!empty($user)) {
				if ($user['isactive'] === 'Active'){
					$_SESSION['userid'] = $user['userid'];
					header('Location: profile/profile.php');
				} else {
					$error = 'Your account is now waiting for validation!';
				}
			} else {
				$error = 'Please insert valid a username and/or password!';
			}
		} else {
			$error = 'Please fill in all input fields!';
		}
	}

?>