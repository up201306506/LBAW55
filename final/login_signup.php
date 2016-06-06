<?php

	/*This summons the database and smarty initializer */
	include_once('config/init.php');
	include_once('database/user_functions.php');
	include_once('action/login_signup_action.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', "Log In/Sign Up");
	$smarty->assign('bootstrap', "css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "css/login_signup.css");

	$smarty->assign('jquery', "javascript/jquery-1.12.1.min.js");
	$smarty->assign('script_boot', "css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script', "javascript/login_signup.js");

	/*Error message*/
	$smarty->assign('error', $error);
	
	/*This summons the smarty template*/
	$smarty->display('login_signup.tpl');

?>