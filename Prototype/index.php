<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Index</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container-parent">
		<div class="container">
			<div class="login-form col-sm-6">
				<div class="form-box">
					<form class="form-horizontal" action="profile.php" method="post" role="form">
						<div class="form-group">
							<div class="col-sm-offset-1 col-sm-10">
								<input id="username" class="form-control" type="text" placeholder="USERNAME"></input>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-1 col-sm-10">
								<input id="password" class="form-control" type="password" placeholder="PASSWORD"></input>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-1 col-sm-11">
								<input class="btn btn-default" type="submit" value="Login"></input>
							</div>
						</div>
					</form>
				</div>
			</div> <!-- log in -->
			<div class="signup-form col-sm-6">
				<div class="form-box">
					<form class="form-horizontal" action="profile.php" method="post" role="form">
						<div class="form-group">
							<div class="col-sm-offset-1 col-sm-10">
								<input id="username" class="form-control" type="text" placeholder="USERNAME"></input>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-1 col-sm-10">
								<input id="email" class="form-control" type="email" placeholder="EMAIL"></input>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-1 col-sm-10">
								<input id="password" class="form-control" type="password" placeholder="PASSWORD"></input>
							</div>
						</div>
						<div class="form-group radio-group">
							<div class="col-sm-offset-1 col-sm-10">
								<label class="radio-inline"><input type="radio" name="optradio"/>Professor</label>
								<label class="radio-inline"><input type="radio" name="optradio"/>Student</label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-1 col-sm-11">
								<input class="btn btn-default" type="submit" value="Sign Up"></input>
							</div>
						</div>
					</form>
				</div>
			</div> <!-- sign up -->
		</div> <!-- container -->
	</div> <!-- container-parent -->
	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="jquery-1.12.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>