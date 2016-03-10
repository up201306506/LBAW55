<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Profile</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="profile.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li>
						<form class="navbar-form" action="#" method="post" role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search"></input>
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
								</div>
							</div>
						</form>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Username</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</div> <!-- container-fluid -->
	</nav> <!-- navbar -->

	<div class="container">
		<h1>Profile</h1>
		<div class="user col-sm-3">
			<img class="img-responsive" src="user_img.png" alt="User's Profile Image" width="200" height="200">
			<span class="glyphicon glyphicon-user">Name</span>
			<span class="glyphicon glyphicon-envelope">Email</span>
			<span class="glyphicon glyphicon-tag">UserID</span>
		</div>
		<div class="user-info col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">Classes</div>
				<ul class="list-group">
					<li class="list-group-item">LBAW</li>
					<li class="list-group-item">PPIN</li>
					<li class="list-group-item">COMP</li>
					<li class="list-group-item">SDIS</li>
					<li class="list-group-item">IART</li>
				</ul>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Exams</div>
				<ul class="list-group">
					<li class="list-group-item"><a href="exam.php">LBAW (13/03/2016)</a></li>
					<li class="list-group-item"><a href="exam.php">PPIN (19/03/2016)</a></li>
					<li class="list-group-item"><a href="exam.php">COMP (25/05/2016)</a></li>
					<li class="list-group-item"><a href="exam.php">SDIS (02/03/2016)</a></li>
					<li class="list-group-item"><a href="exam.php">IART (30/04/2016)</a></li>
				</ul>
			</div>
		</div>
	</div> <!-- container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="jquery-1.12.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>