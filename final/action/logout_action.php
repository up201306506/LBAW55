<?php

	include_once('../config/init.php');

	// Initialize the session
	session_start();

	// Unset all of the session variables
	$_SESSION = array();

	// If it's desired to kill the session, also delete the session cookie
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
				  $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
	}

	// Destroy the session
	session_destroy();

	// Redirect to the main page
	header('Location: ' . $BASE_URL . 'index.php');
?>