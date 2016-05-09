{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}

	<div class="container">
		<h1>Profile</h1>
		<div class="user col-sm-3">
			<div class="user-box">
				<img class="img-responsive profile-img" src="../css/res/user_img.png" alt="User's Profile Image" width="200" height="200">
				<span class="glyphicon glyphicon-user"> {$session_name}</span> 		
				<span class="glyphicon glyphicon-envelope"> {$session_email}</span> 
				<span class="glyphicon glyphicon-credit-card"> {$session_username}</span> 
				<button type="button" class="btn btn-info editUserName">edit</button>
			</div>
		</div>
		<div class="user-info col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Exams</div>
				<ul class="list-group">
					<li class="list-group-item"><a href="../student/exam/exam.php">LBAW (13/03/2016)</a></li>
					<li class="list-group-item"><a href="../student/exam/exam.php">PPIN (19/03/2016)</a></li>
					<li class="list-group-item"><a href="../student/exam/exam.php">COMP (25/05/2016)</a></li>
					<li class="list-group-item"><a href="../student/exam/exam.php">SDIS (02/03/2016)</a></li>
					<li class="list-group-item"><a href="../student/exam/exam.php">IART (30/04/2016)</a></li>
				</ul>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading text-center">Classes</div>
				<ul class="list-group">
					<li class="list-group-item"><a href="../public/class.php">LBAW</a></li>
					<li class="list-group-item"><a href="../public/class.php">PPIN</a></li>
					<li class="list-group-item"><a href="../public/class.php">COMP</a></li>
					<li class="list-group-item"><a href="../public/class.php">SDIS</a></li>
					<li class="list-group-item"><a href="../public/class.php">IART</a></li>
				</ul>
			</div>
		</div>
		<div class="user-options col-sm-3">
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
					<li><a href="../professor/class/create_class.php"><span class="glyphicon glyphicon-education"></span>Create Class</a></li>
					<li><a href="../professor/exam/create_exam.php"><span class="glyphicon glyphicon-file"></span>Create Exam</a></li>
					<li><a href="../professor/question/create_question.php"><span class="glyphicon glyphicon-pencil"></span>Create Question</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-stats"></span>Statistics</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Review Grades</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
				</ul>
			</div>
		</div>
	</div> <!-- container -->

{include file='common/footer.tpl'}