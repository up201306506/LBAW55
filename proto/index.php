<?php

	/*This summons the database and smarty initializer */
	include_once('config/init.php');

	/*Other PHP actions should go here*/
	$pagename = 'index';
	$smarty->assign('pagename', $pagename);
	
	/*This summons the smarty template*/
	$smarty->display('main.tpl');

?>