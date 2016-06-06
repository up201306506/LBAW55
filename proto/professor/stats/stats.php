<?php

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');
	include_once('../../database/class_functions.php');
	include_once('../../database/user_functions.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Statistics');

	$smarty->assign('bootstrap', "../../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../../css/statistics.css");
	$smarty->assign('cssnavbar', "../../css/navbar.css");

	$smarty->assign('script_boot', "../../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../../javascript/stats.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));

	/*Stats*/
	$classes_owned = getClassByOwnerID($_SESSION['userid']);
	$classes_managed = getClassByManagerID($_SESSION['userid']);
	$classes = array_merge($classes_owned, $classes_managed);

	$exams = [];
	foreach ($classes as $class) {
		$exams[$class['classid']] = getExamsOfClassAll($class['classid']);
	}

	// echo print_r($exams);

	$smarty->assign('classes', $classes);
	$smarty->assign('exams', $exams);

	include_once('../../action/export_file_action.php');
	
	/*This summons the smarty template*/
	$smarty->display('professor/stats/stats.tpl');

?>