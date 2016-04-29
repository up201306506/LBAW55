<?php

	include_once('../config/init.php');	
	include_once('../database/user_functions.php');
	
	
	 if (!$_POST['username'] || !$_POST['password'] || !$_POST['name'] || !$_POST['email'] || !$_POST['password']) {
	    $_SESSION['error_messages'][] = 'Invalid login';
	    $_SESSION['form_values'] = $_POST;
	   // header('Location: ' . $_SERVER['HTTP_REFERER']);
	    echo '<script type="text/javascript">alert(" failed to login "); </script>';
	    exit;
	  }

	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  
	  if (isLoginCorrect($username, $password)) {
	    $_SESSION['username'] = $username;
	    $_SESSION['success_messages'][] = 'Login successful';
		echo '<script type="text/javascript">alert(" login done "); </script>';
		header('Location: '. $BASE_URL .'profile/profile.php');		
	  } else {
	    $_SESSION['error_messages'][] = 'Login failed';
		echo '<script type="text/javascript">alert(" login failed "); </script>';
	  }
	  

?>