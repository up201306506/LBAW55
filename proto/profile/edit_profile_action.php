<?php
	include_once('../config/init.php');	
	include_once('../database/user_functions.php');

switch ($_GET['update']) {
		case 'name':
			$username = $_POST['name'];
			echo '<p>'.$username.'</p>';

		  break;

		case 'email':
			$email = $_POST['email'];
			echo '<p>'.$email.'</p>';
		  break;
		case 'password':
			$password = $_POST['password'];
			$re_password = $_POST['re-password'];
			
			echo '<p>'.$password.'</p><br>';
			echo '<p>'.$re_password.'</p>';

		  break;

		case 'description':
		 	$description = $_POST['description'];

		 	echo '<p>'.htmlspecialchars($description).'</p>';
		 	break;
		case 'picture':
			$picture = $_POST['upload_img'];

			echo '<p>'.$picture.'</p>';
		 	break;


		default:
		  break;
	}







?>