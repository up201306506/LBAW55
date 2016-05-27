<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');
	include_once('../database/user_functions.php');

	/*Other PHP actions should go here*/
	$pagename = 'Profile';
	$smarty->assign('pagename', $pagename);

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/profile.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	$smarty->assign('script', "../javascript/profile.js");
	$smarty->assign('wrapper', "../javascript/wrapper.js");
	
	/*Session variables*/
	$smarty->assign('session_username', getUsername($_SESSION['userid']));
	$smarty->assign('session_name', getName($_SESSION['userid']));
	$smarty->assign('usertype', getAccountType($_SESSION['userid']));
	$smarty->assign('session_email', getEmail($_SESSION['userid']));
	$smarty->assign('description', getDescription($_SESSION['userid']));
	
	/*This summons the smarty template*/
	$smarty->display('profile/profile.tpl');

?>