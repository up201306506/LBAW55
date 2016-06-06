<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../database/exam_functions.php');
	include_once('../action/session_check.php');

	if ($user_type != 'Administrator') {
		header('Location: ' . $BASE_URL . 'profile/profile.php');
	}
	
	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Manage Exams');

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/manage_exams.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/manage_exams.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));

	/*Exams*/
	$smarty->assign('examlist', getAllExams());
		
	/*This summons the smarty template*/
	$smarty->display('admin/manage_exams.tpl');

?>