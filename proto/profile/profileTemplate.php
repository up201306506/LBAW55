<?php

	/*This summons the database and smarty initializer */
	include_once('../config/init.php');

	/*Other PHP actions should go here*/
    $pagename = 'Profil';
	$css_name = 'profile';
	$smarty->assign('pagename', $pagename);
	
	$session_username = $_SESSION['username'];
	$smarty->assign('session_username', $session_username);
	$session_name = $_SESSION['name'];
	$smarty->assign('session_name', $session_name);
	$session_email = $_SESSION['email'];
	$smarty->assign('session_email', $session_email);
	
	
	/*This summons the smarty template*/
	$smarty->display('profile.tpl');

?>
