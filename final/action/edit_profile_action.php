<?php

	$error;

	if (isset($_POST['edit-name'])) {
		if (!empty($_POST['name'])) {
			updateName($_POST['name'], $_SESSION['userid']);
			header('Location: profile.php');
		} else {
			$error = 'You new name can\'t be empty!';
		}
	} else if (isset($_POST['edit-email'])) {
		if (!empty($_POST['email'])) {
			updateEmail($_POST['email'], $_SESSION['userid']);
			header('Location: profile.php');
		} else {
			$error = 'You new email can\'t be empty!';
		}
	} else if (isset($_POST['edit-password'])) {
		if (!empty($_POST['password']) && !empty($_POST['re-password'])) {
			if ($_POST['password'] === $_POST['re-password']) {
				updatePassword($_POST['password'], $_SESSION['userid']);
				header('Location: profile.php');
			} else {
				$error = 'Your confirmation password is different!';
			}
		} else {
			$error = 'Please fill in both input fields!';
		}
	} else if (isset($_POST['edit-description'])) {
		if (!empty($_POST['description'])) {
			updateDescription($_POST['description'], $_SESSION['userid']);
			header('Location: profile.php');
		} else {
			$error = 'You new description can\'t be empty!';
		}
	}else if (isset($_POST['edit-profile-pic'])) {

		$target_dir = $BASE_DIR . "css/res/user_img/";
		$target_file = $target_dir . $_SESSION['userid'] . ".png";
		$uploadOk = 1;
		
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["upload_img"]["tmp_name"]);
		if($check !== false) {
			$error = "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			$error = "File is not an image.";
			$uploadOk = 0;
		}
		 // Check file size
		if ($_FILES["upload_img"]["size"] > 500000) {
			$error =  "Sorry, your file is too large.";
			$uploadOk = 0;
		} 
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$error = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (  imagepng(imagecreatefromstring(file_get_contents($_FILES["upload_img"]["tmp_name"])), $target_file) ) {
				$error =  "The file ". basename( $_FILES["upload_img"]["name"]). " has been uploaded.";
			} else {
				$error = "Sorry, there was an error uploading your file.";
			}
		}
		
	}

?>