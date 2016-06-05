<?php

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');
	include_once('../../database/user_functions.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Statistics');

	$smarty->assign('bootstrap', "../../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../../css/statistics.css");
	$smarty->assign('cssnavbar', "../../css/navbar.css");

	$smarty->assign('script_boot', "../../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../../javascript/jquery-1.12.1.min.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	
	/*This summons the smarty template*/
	$smarty->display('professor/statistics/statistics.tpl');

?>