<?php

	/*This summons the database and smarty initializer */
	include_once('../../config/init.php');

	/*Other PHP actions should go here*/
	$pagename = 'create_class';
	$navbar = "<?php include '../../navbar.php'; ?>";
	$smarty->assign('pagename', $pagename);
	$smarty->assign('navbar', $navbar);

	/*This summons the smarty template*/
	$smarty->display('professor/class/create_class.tpl');

?>