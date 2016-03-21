<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Log In/Sign Up</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login_signup.css">

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
			<div class="col-sm-offset-3 col-sm-6">
				<ul class="tabs">
					<li class="tab-link current" data-tab="tab-1">Log In</li>
					<li class="tab-link" data-tab="tab-2">Sign Up</li>
				</ul>
				<div class="tab-content current" id="tab-1">
					<div id="login-form">
						<form class="form-horizontal" action="profile.php" method="post" role="form">
							<div class="form-group">
								<input id="username" class="form-control" type="text" placeholder="USERNAME"></input>
							</div>
							<div class="form-group">
								<input id="password" class="form-control" type="password" placeholder="PASSWORD"></input>
							</div>
							<div class="form-group">
								<input class="btn btn-default" type="submit" value="Log In"></input>
							</div>
						</form>
					</div>
				</div>
				<div class="tab-content" id="tab-2">
					<div id="signup-form">
						<form class="form-horizontal" action="profile.php" method="post" role="form">
							<div class="form-group">
								<input id="username" class="form-control" type="text" placeholder="USERNAME"></input>
							</div>
							<div class="form-group">
								<input id="email" class="form-control" type="text" placeholder="EMAIL"></input>
							</div>
							<div class="form-group">
								<input id="password" class="form-control" type="password" placeholder="PASSWORD"></input>
							</div>
							<div class="form-group radio-group">
								<label class="radio-inline"><input type="radio" name="optradio"/>Professor</label>
								<label class="radio-inline"><input type="radio" name="optradio"/>Student</label>
							</div>
							<div class="form-group">
								<input class="btn btn-default" type="submit" value="Sign Up"></input>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="jquery-1.12.1.min.js"></script>
	<!-- Include file to make tabs work -->
	<script src="tabs.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>