<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');
	include_once('../database/class_functions.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Review Grades');

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/review_grades.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	
	/*Session variables*/
	$usertype = getAccountType($_SESSION['userid']);
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	$smarty->assign('usertype', $usertype);

	if ($usertype == 'Student') {
		$classes = getClassesByUser($_SESSION['userid']);

		$exams = [];
		foreach ($classes as $class) {
			$exams[$class['classname']] = getExamsOfClassAll($class['classid']);
		}

		$smarty->assign('exams', $exams);
		$smarty->assign('classes', $classes);
	} else if ($usertype == 'Professor') {
		$classes_owned = getClassByOwnerID($_SESSION['userid']);
		$classes_managed = getClassByManagerID($_SESSION['userid']);
		$classes = array_merge($classes_owned, $classes_managed);
		//echo print_r($classes,true);
		
		$exams = [];
		foreach ($classes as $class) {
			$exams[$class['classname']] = getExamsOfClassAll($class['classid']);
		}
		//echo print_r($exams,true);
		
		$smarty->assign('exams', $exams);
		$smarty->assign('classes', $classes);
	}
	
	/*This summons the smarty template*/
	$smarty->display('public/review_grades.tpl');

?>