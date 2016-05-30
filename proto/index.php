<?php
	/*This summons the database and smarty initializer */
	include_once('config/init.php');

	/*Other PHP actions should go here*/
	$smarty->assign('pagename', 'ElDoom');

	$smarty->assign('bootstrap', "css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "css/index.css");

	$smarty->assign('jquery', "javascript/jquery-1.12.1.min.js");
	$smarty->assign('script_boot', "css/Bootstrap/js/bootstrap.min.js");
	
	/*This summons the smarty template*/
	$smarty->display('index.tpl');
?>