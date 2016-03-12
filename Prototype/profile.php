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
		<h1>Profile</h1>
		<div class="user col-sm-3">
			<img class="img-responsive profile-img" src="user_img.png" alt="User's Profile Image" width="200" height="200">
			<span class="glyphicon glyphicon-user">Name</span>
			<span class="glyphicon glyphicon-envelope">Email</span>
			<span class="glyphicon glyphicon-tag">UserID</span>
		</div>
		<div class="user-info col-sm-6">
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
		<div class="user-options col-sm-3">
			<div class="calendar">
				<table class="calendar-table">
					<div class="calendar-header">
						<span class="glyphicon glyphicon-triangle-left text-center arrow-left"></span>
						<div class="month text-center"><span>Month</span></div>
						<span class="glyphicon glyphicon-triangle-right text-center arrow-right"></span>
					</div>
					<tr>
						<td class="text-center">Seg</td>
						<td class="text-center">Ter</td>
						<td class="text-center">Qua</td>
						<td class="text-center">Qui</td>
						<td class="text-center">Sex</td>
						<td class="text-center">Sab</td>
						<td class="text-center">Dom</td>
					</tr>
					<tr>
						<td colspan="1"></td>
						<td class="text-center">1</td>
						<td class="text-center">2</td>
						<td class="text-center">3</td>
						<td class="text-center">4</td>
						<td class="text-center">5</td>
						<td class="text-center">6</td>
					</tr>
					<tr>
						<td class="text-center">7</td>
						<td class="text-center">8</td>
						<td class="text-center">9</td>
						<td class="text-center">10</td>
						<td class="text-center">11</td>
						<td class="text-center">12</td>
						<td class="text-center">13</td>
					</tr>
					<tr>
						<td class="text-center">14</td>
						<td class="text-center">15</td>
						<td class="text-center">16</td>
						<td class="text-center">17</td>
						<td class="text-center">18</td>
						<td class="text-center">19</td>
						<td class="text-center">20</td>
					</tr>
					<tr>
						<td class="text-center">21</td>
						<td class="text-center">22</td>
						<td class="text-center">23</td>
						<td class="text-center">24</td>
						<td class="text-center">25</td>
						<td class="text-center">26</td>
						<td class="text-center">27</td>
					</tr>
					<tr>
						<td class="text-center">28</td>
						<td class="text-center">29</td>
						<td class="text-center">30</td>
						<td class="text-center">31</td>
						<td colspan="1"></td>
						<td colspan="1"></td>
						<td colspan="1"></td>
					</tr>
				</table>
			</div>
			<div class="options">
				<ul>
					<li><a href="#">Statistics</a></li>
					<li><a href="#">Create Class</a></li>
					<li><a href="#">Create Question</a></li>
					<li><a href="#">Review Grades</a></li>
					<li><a href="#">Find Classes</a></li>
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