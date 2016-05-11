<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Profile Edition Page</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="../css/Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/edit_profile.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include '../navbar.php'; ?>
	<div class="container">
		<h1 id="hum" class="col-sm-offset-3 col-sm-6">Edit Profile</h1>
		<div id="edit-box" class="col-sm-offset-3 col-sm-6">
			<div id="edit-name-box">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="name">Name:</label>
						<input id="name" class="form-control" type="text"></input>
					</div>
					<input id="edit-name" class="btn btn-primary" type="submit" value="Submit new Name"></input>
				</form> <!-- Edit name -->
			</div>
			<div id="edit-email-box">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="email">Email:</label>
						<input id="email" class="form-control" type="text"></input>
					</div>
					<input id="edit-email" class="btn btn-primary" type="submit" value="Submit new Email"></input>
				</form> <!-- Edit email -->
			</div>
			<div id="edit-password-box">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="password">Password:</label>
						<input id="password" class="form-control" type="password"></input>
					</div>
					<div class="form-group">
						<label for="re-password">Confirm Password:</label>
						<input id="re-password" class="form-control" type="password"></input>
					</div>
					<input id="edit-password" class="btn btn-primary" type="submit" value="Submit new Password"></input>
				</form> <!-- Edit password -->
			</div>
			<div id="edit-description-box">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea id="description" class="form-control" rows="6"></textarea>
					</div>
					<input id="edit-description" class="btn btn-primary" type="submit" value="Submit new Description"></input>
				</form> <!-- Edit description -->
			</div>
			<div id="edit-profile-pic-box">
				<form action="profile.php" method="post" role="form">
					<div class="form-group">
						<label for="upload_img">Profile Picture:</label>
						<input id="upload_img" type="file" accept="image/*"></input>
					</div>
					<input id="edit-profile-pic" class="btn btn-primary" type="submit" value="Submit new Profile Picture"></input>
				</form> <!-- Edit profile picture -->
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="jquery-1.12.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>