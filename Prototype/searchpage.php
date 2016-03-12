<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Search Results</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="searchpage.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
						<form class="navbar-form" action="searchpage.php" method="post" role="search">
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
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Options <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Username</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div> <!-- container-fluid -->
	</nav> <!-- navbar -->
	
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading text-center">Search Results</div>
			<div class="panel-body">
				<div class="panel panel-default results-box">
					<div class="panel-heading">Professors</div>
					<ul class="list-group">
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Professor #1</a>
						</li>
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Professor #2</a>
						</li>
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Professor #3</a>
						</li>
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Professor #4</a>
						</li>
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Professor #5</a>
						</li>
					</ul>
				</div>
				<div class="panel panel-default results-box">
					<div class="panel-heading">Students</div>
					<ul class="list-group">
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Student #1</a>
						</li>
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Student #2</a>
						</li>
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Student #3</a>
						</li>
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Student #4</a>
						</li>
						<li class="list-group-item">
							<a href="#"><img class="sm-profile-img" src="user_img.png" alt="User's Profile Image" width="35" height="35"></a>
							<a href="#">Student #5</a>
						</li>
					</ul>
				</div>
				<div class="panel panel-default results-box">
					<div class="panel-heading">Classes</div>
					<ul class="list-group">
						<li class="list-group-item"><a href="#">Class #1</a></li>
						<li class="list-group-item"><a href="#">Class #2</a></li>
						<li class="list-group-item"><a href="#">Class #3</a></li>
						<li class="list-group-item"><a href="#">Class #4</a></li>
						<li class="list-group-item"><a href="#">Class #5</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="jquery-1.12.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>