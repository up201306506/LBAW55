{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container">
	<h1>Profile</h1>
	<div class="user col-sm-3">
		<div class="user-box">
			<img class="img-responsive profile-img" src="../css/res/user_img.png" alt="User's Profile Image" width="200" height="200">
			<span class="glyphicon glyphicon-user">{$session_name}</span>
			<span class="glyphicon glyphicon-envelope">{$session_email}</span>
			<span class="glyphicon glyphicon-credit-card">{$session_username}</span>
		</div>
		<div id="description">
			<h3>Description</h3>
			<span>{$description}</span>
		</div>
	</div>
	<div class="user-info col-sm-6">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Exam</th>
					<th>Data and Time</th>
					<th>Accessibility</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="exam.php">Exam #</a></td>
					<td>Date and Time #</td>
					<td>Accessibility #</td>
				<tr>
			</tbody>
		</table>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Class</th>
					<th>Manager</th>
					<th>Accessibility</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="class.php">Class #$i</a></td>
					<td><a href="profile.php">Manager #$i</td>
					<td>Accessibility #$i</td>
				<tr>
			</tbody>
		</table>
	</div>
	<div class="user-options col-sm-3">
		<div class="events">
			<h5 class="event-h5">ONGOING EVENTS</h5>
			<span>- There are no ongoing events.</span>
			<h5>COMING SOON EVENTS</h5>
			<span>- Exam of LBAW (13/03/2016)</span>
		</div>
		<div id="calendar">
			<div id="calendar-options">
				<div class="options-block">
					<a href="#"><span class="glyphicon glyphicon-triangle-left"></span></a>
				</div>
				<div class="options-block">
					<a id="month-link" href="calendar.php">Month</a>
				</div>
				<div class="options-block">
					<a href="#"><span class="glyphicon glyphicon-triangle-right"></span></a>
				</div>
			</div>
			<div id="calendar-grid">
				<div class="calendar-row">
					<div class="day-cell"><abbr title="Monday">Mon</abbr></div>
					<div class="day-cell"><abbr title="Tuesday">Tue</abbr></div>
					<div class="day-cell"><abbr title="Wednesday">Wed</abbr></div>
					<div class="day-cell"><abbr title="Thursday">Thu</abbr></div>
					<div class="day-cell"><abbr title="Friday">Fri</abbr></div>
					<div class="day-cell"><abbr title="Saturday">Sat</abbr></div>
					<div class="day-cell"><abbr title="Sunday">Sun</abbr></div>
				</div>
				<div class="calendar-row">
					<div class="empty-cell"></div>
					<div class="empty-cell"></div>
					<div class="calendar-cell" cell="1">1</div>
					<div class="calendar-cell" cell="2">2</div>
					<div class="calendar-cell" cell="3">3</div>
					<div class="calendar-cell" cell="4">4</div>
					<div class="calendar-cell" cell="5">5</div>
				</div>
				<div class="calendar-row">
					<div class="calendar-cell" cell="6">6</div>
					<div class="calendar-cell" cell="7">7</div>
					<div class="calendar-cell" cell="8">8</div>
					<div class="calendar-cell" cell="9">9</div>
					<div class="calendar-cell" cell="10">10</div>
					<div class="calendar-cell" cell="11">11</div>
					<div class="calendar-cell" cell="12">12</div>
				</div>
				<div class="calendar-row">
					<div class="calendar-cell" cell="13">13</div>
					<div class="calendar-cell" cell="14">14</div>
					<div class="calendar-cell" cell="15">15</div>
					<div class="calendar-cell" cell="16">16</div>
					<div class="calendar-cell" cell="17">17</div>
					<div class="calendar-cell" cell="18">18</div>
					<div class="calendar-cell" cell="19">19</div>
				</div>
				<div class="calendar-row">
					<div class="calendar-cell" cell="20">20</div>
					<div class="calendar-cell" cell="21">21</div>
					<div class="calendar-cell" cell="22">22</div>
					<div class="calendar-cell" cell="23">23</div>
					<div class="calendar-cell" cell="24">24</div>
					<div class="calendar-cell" cell="25">25</div>
					<div class="calendar-cell" cell="26">26</div>
				</div>
				<div class="calendar-row">
					<div class="calendar-cell" cell="27">27</div>
					<div class="calendar-cell" cell="28">28</div>
					<div class="calendar-cell" cell="29">29</div>
					<div class="calendar-cell" cell="30">30</div>
					<div class="calendar-cell" cell="31">31</div>
					<div class="empty-cell"></div>
					<div class="empty-cell"></div>
				</div>
			</div>
		</div>
		<div class="options">
			<ul>
				<li><a href="create_class.php"><span class="glyphicon glyphicon-education"></span>Create Class</a></li>
				<li><a href="create_exam.php"><span class="glyphicon glyphicon-file"></span>Create Exam</a></li>
				<li><a href="create_question.php"><span class="glyphicon glyphicon-pencil"></span>Create Question</a></li>
				<li><a href="statistics.php"><span class="glyphicon glyphicon-stats"></span>Statistics</a></li>
				<li><a href="review_grades.php"><span class="glyphicon glyphicon-list-alt"></span>Review Grades</a></li>
				<li><a href="find_classes.php"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
			</ul>
		</div>
	</div>
</div> <!-- container -->

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}