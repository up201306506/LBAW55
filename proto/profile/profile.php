<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../database/class_functions.php');
	include_once('../action/session_check.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Your Profile');

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/profile.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/profile.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	$smarty->assign('session_name', getName($_SESSION['userid']));
	$smarty->assign('usertype', getAccountType($_SESSION['userid']));
	$smarty->assign('session_email', getEmail($_SESSION['userid']));
	$smarty->assign('description', getDescription($_SESSION['userid']));

	/*Calendar*/
	$smarty->assign('month', date('F'));
	$smarty->assign('days', date('t'));
	$smarty->assign('interval', abs(date('N') - date('j')));

	if($user_type == "Student") {
		$smarty->assign('exams', getExamsByUser($_SESSION['userid']));
		$smarty->assign('classes', getClassesByUser($_SESSION['userid']));
	} else {
		$classes_owned = getClassByOwnerID($_SESSION['userid']);
		$classes_managed = getClassByManagerID($_SESSION['userid']);
		$classes = array_merge($classes_owned, $classes_managed);
		
		$exams = [];
		foreach ($classes as $class)
			$exams = array_merge($exams,getExamsOfClass($class['classid']));
		
		$smarty->assign('exams', $exams);
		$smarty->assign('classes', $classes);
	}
	
	/*This summons the smarty template*/
	$smarty->display('profile/profile.tpl');

?>