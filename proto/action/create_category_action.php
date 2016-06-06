<?php

	if (isset($_POST['create'])) {
		if (!empty($_POST['category'])) {
			insertNewCategory($_POST['category']);
			header('Location: ' . $BASE_URL . 'profile/profile.php');
		}
	}

?>