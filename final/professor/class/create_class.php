<?php

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');
	include_once('../../database/user_functions.php');
	include_once('../../action/session_check.php');

	if ($user_type != 'Professor') {
		header('Location: ' . $BASE_URL . 'profile/profile.php');
	}
	
	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Create Class');

	$smarty->assign('bootstrap', "../../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../../css/create_class.css");
	$smarty->assign('cssnavbar', "../../css/navbar.css");

	$smarty->assign('script_boot', "../../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../../javascript/create_class.js");

	/*Session variables*/
	$smarty->assign('professors', getProfessors());
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	
	/*This summons the smarty template*/
	$smarty->display('professor/class/create_class.tpl');

?>