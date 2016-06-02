<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['categoryid']) && !empty($_POST['question']) && !empty($_POST['answers'])) {
		insertNewQuestion($_POST['question'], $_POST['categoryid']);
		
		$answers = explode("|", $_POST['answers']);
		foreach ($answers as $answer) {
			insertNewAnswer($answer);
		}
	}

?>