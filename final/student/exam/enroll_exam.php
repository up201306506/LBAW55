<?php

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');
	include_once('../../database/user_functions.php');
	include_once('../../action/session_check.php');
	include_once('../../action/enroll_exam_action.php');

	if ($user_type == 'Administrator') {
		header('Location: ' . $BASE_URL . 'profile/profile.php');
	}

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Enroll Exam');

	$smarty->assign('bootstrap', "../../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../../css/enroll_exam.css");
	$smarty->assign('cssnavbar', "../../css/navbar.css");

	$smarty->assign('script_boot', "../../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../../javascript/jquery-1.12.1.min.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	$smarty->assign('error', $error);
	
	/*This summons the smarty template*/
	$smarty->display('student/exam/enroll_exam.tpl');

?>