<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$user = isLoginCorrect($_POST['username'], $_POST['password']);

		if (!empty($user)) {
			if ($user['isactive'] === 'Active') {
				$_SESSION['userid'] = $user['userid'];
				echo "success";
			} else {
				echo "pending";
			}
		} else {
			echo "wrongCredentials";
		}
	} else {
		echo "fillInputFields";
	}

?>