<?php
	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

	 if (!$_POST['username'] || !$_POST['password']) {
	    $_SESSION['error_messages'][] = 'Fill all input fields';
	    $_SESSION['form_values'] = $_POST;
	    header('Location: ' . $_SERVER['HTTP_REFERER']);
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
	    $_SESSION['error_messages'][] = 'Wrong Login Credentials';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	  }
	  

?>