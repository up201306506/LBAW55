<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Class</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="../css/Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/class.css">
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
		<div class="class col-sm-3">
			<div class="class-box">
				<h1>Class Name</h1>
				<span>Created by: Professor's Name</span>
				<span>Date: 01/01/2015</span>
			</div>
		</div>
		<div class="class-info col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Description</div>
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</div>
			<div class="exams panel panel-default">
				<div class="panel-heading text-center">Exams</div>
				<ul class="list-group">
					<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-file"></span>Exam #1</a></li>
					<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-file"></span>Exam #2</a></li>
					<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-file"></span>Exam #3</a></li>
					<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-file"></span>Exam #4</a></li>
					<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-file"></span>Exam #5</a></li>
				</ul>
			</div>
			<div id="participants" class="panel panel-default">
				<div class="panel-heading text-center">Participants</div>
				<ul class="list-group">
					<li class="list-group-item"><a href="#">Participant #1</a></li>
					<li class="list-group-item"><a href="#">Participant #2</a></li>
					<li class="list-group-item"><a href="#">Participant #3</a></li>
					<li class="list-group-item"><a href="#">Participant #4</a></li>
					<li class="list-group-item"><a href="#">Participant #5</a></li>
					<li class="list-group-item"><a href="#">Participant #6</a></li>
					<li class="list-group-item"><a href="#">Participant #7</a></li>
					<li class="list-group-item"><a href="#">Participant #8</a></li>
					<li class="list-group-item"><a href="#">Participant #9</a></li>
					<li class="list-group-item"><a href="#">Participant #10</a></li>
					<li class="list-group-item"><a href="#">Participant #11</a></li>
					<li class="list-group-item"><a href="#">Participant #12</a></li>
					<li class="list-group-item"><a href="#">Participant #13</a></li>
					<li class="list-group-item"><a href="#">Participant #14</a></li>
					<li class="list-group-item"><a href="#">Participant #15</a></li>
				</ul>
			</div>
			<button id="shide" type="button" class="btn btn-default">Show Participants</button>
		</div>
		<div class="class-options col-sm-3">
			<div class="events">
				<h5 class="event-h5">ONGOING EVENTS</h5>
				<span>- There are no ongoing events.</span>
				<h5>COMING SOON EVENTS</h5>
				<span>- Exam of LBAW (13/03/2016)</span>
			</div>
			<div class="calendar table-responsive">
				<table class="calendar-table">
					<div class="calendar-header">
						<a class="glyphicon glyphicon-triangle-left text-center arrow-left" href="#"></a>
						<div class="month text-center"><a href="#">Month</a></div>
						<a class="glyphicon glyphicon-triangle-right text-center arrow-right" href="#"></a>
					</div>
					<tr>
						<td class="text-center"><abbr title="Monday">Mon</abbr></td>
						<td class="text-center"><abbr title="Tuesday">Tue</abbr></td>
						<td class="text-center"><abbr title="Wednesday">Wed</abbr></td>
						<td class="text-center"><abbr title="Thursday">Thu</abbr></td>
						<td class="text-center"><abbr title="Friday">Fri</abbr></td>
						<td class="text-center"><abbr title="Saturday">Sat</abbr></td>
						<td class="text-center"><abbr title="Sunday">Sun</abbr></td>
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
					<li><a href="../professor/exam/create_exam.php"><span class="glyphicon glyphicon-file"></span>Create Exam</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-stats"></span>Statistics</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Review Grades</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../javascript/jquery-1.12.1.min.js"></script>
	<!-- Include corresponding .js file -->
	<script src="../javascript/class.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../css/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>