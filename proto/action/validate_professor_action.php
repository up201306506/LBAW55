<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');
	include_once('../database/professor_validation.php');

	
	
	if (!empty($_POST['validate'])) {
		$ids = explode(",", $_POST['validate']);
		
		echo "good";
	} else {
		echo "bad";
	}
	
	/*if (!empty($_POST['ban'])) {
		$ids = explode(",", $_POST['ban']);
	}*/

?>