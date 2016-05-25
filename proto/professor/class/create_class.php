<?php

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');

	/*Other PHP actions should go here*/
	$pagename = 'Create Class';
	$smarty->assign('pagename', $pagename);

	$smarty->assign('bootstrap', "../css/Bootstrap/css/bootstrap.min.css");
	$smarty->assign('csspage', "../css/create_class.css");
	$smarty->assign('cssnavbar', "../css/navbar.css");

	$smarty->assign('script_boot', "../css/Bootstrap/js/bootstrap.min.js");
	$smarty->assign('script_jquery', "../javascript/jquery-1.12.1.min.js");
	
	/*This summons the smarty template*/
	$smarty->display('professor/class/create_class.tpl');

?>