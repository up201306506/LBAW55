<?php

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');
	include_once('../../database/user_functions.php');
	include_once('../../database/class_functions.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Edit Class Participants');

	$smarty->assign('bootstrap', "../../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../../css/edit_class_participants.css");
	$smarty->assign('cssnavbar', "../../css/navbar.css");

	$smarty->assign('script_boot', "../../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../../javascript/edit_class_participants.js");
	
	/*Session variables*/
	$smarty->assign('classid', $_GET['id']);

	$allstudents = getAllStudents();

	$studentspermission = [];
	foreach ($allstudents as $student) {
		if (checkStudentBelongsClass($student['userid'], $_GET['id'])) {
			$studentspermission[$student['userid']] = 'true';
		} else {
			$studentspermission[$student['userid']] = 'false';
		}
	}

	$smarty->assign('allstudents', $allstudents);
	$smarty->assign('studentspermission', $studentspermission);
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	
	/*This summons the smarty template*/
	$smarty->display('professor/class/edit_class_participants.tpl');

?>