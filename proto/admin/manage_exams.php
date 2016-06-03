<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../database/class_functions.php');
	include_once('../database/exam_functions.php');
	
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
	$examlist = getAllExams();

	$exam_owners = [];
	foreach ($examlist as $exam) {
		$temp = getExamsClassID($exam['examid']);
		$temp = getClassOwnerID($temp['classid']);
		$exam_owners[$exam['examid']] =getUserbyID($temp['directorid'])['name'];
	}

	$smarty->assign('examlist', $examlist);
	$smarty->assign('exam_owners', $exam_owners);
		
	/*This summons the smarty template*/
	$smarty->display('admin/manage_exams.tpl');

?>