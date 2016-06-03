<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	if (!empty($_POST['categoryid']) && !empty($_POST['question']) && !empty($_POST['answers']) && !empty($_POST['correct'])) {
		insertNewQuestion($_POST['question'], $_POST['categoryid']);

		$answers = explode("|:|", $_POST['answers']);
		for ($i = 0; $i < count($answers); $i++) {
			if ($i === $_POST['correct']) {
				insertNewAnswer($answers[$i], 'true');
			} else {
				insertNewAnswer($answers[$i], 'false');
			}
		}
	}

?>