<?php

	/*This summons the database and smarty initializer */
	include_once('config/init.php');

	/*Other PHP actions should go here*/
	$pagename = 'Login';
	$css_name = 'login_signup';
	$smarty->assign('pagename', $pagename);
	$smarty->assign('$css_name', $css_name);
	
	/*This summons the smarty template*/
	$smarty->display('login_signup.tpl');

?>