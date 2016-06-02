<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['categoryid']) && !empty($_POST['question']) && !empty($_POST['answers'])) {
		insertNewQuestion($_POST['question'], $_POST['categoryid']);
		echo $_POST['answers'];
	}

?>