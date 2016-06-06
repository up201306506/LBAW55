<?php

	include_once('../config/init.php');
	include_once('../database/user_functions.php');

	if (!empty($_POST['examid']) && !empty($_POST['userid']) && !empty($_POST['answerid']) && !empty($_POST['questionid'])) {
		updateUserAnswer($_POST['examid'], $_POST['userid'], $_POST['answerid'], $_POST['questionid']);
	}

?>