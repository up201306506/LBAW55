<?php

	/*This summons the database and smarty initializer */
	include_once('config/init.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'Login');

	$smarty->assign('bootstrap', "css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "css/login_signup.css");
	
	/*This summons the smarty template*/
	$smarty->display('login_signup.tpl');

?>