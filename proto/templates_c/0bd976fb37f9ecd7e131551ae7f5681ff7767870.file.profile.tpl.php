<?php /* Smarty version Smarty-3.1.15, created on 2016-05-20 11:51:02
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:346403140573ed52287fa37-14355705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bd976fb37f9ecd7e131551ae7f5681ff7767870' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/profile.tpl',
      1 => 1463737805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346403140573ed52287fa37-14355705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573ed522e5c2a2_65592306',
  'variables' => 
  array (
    'session_name' => 0,
    'session_email' => 0,
    'session_username' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573ed522e5c2a2_65592306')) {function content_573ed522e5c2a2_65592306($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Profile</h1>
	<div class="user col-sm-3">
		<div class="user-box">
			<img class="img-responsive profile-img" src="../css/res/user_img.png" alt="User's Profile Image" width="200" height="200">
			<span class="glyphicon glyphicon-user"><?php echo $_smarty_tpl->tpl_vars['session_name']->value;?>
</span>
			<span class="glyphicon glyphicon-envelope"><?php echo $_smarty_tpl->tpl_vars['session_email']->value;?>
</span>
			<span class="glyphicon glyphicon-credit-card"><?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</span>
		</div>
		<div id="description">
			<h3>Description</h3>
			<span><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</span>
		</div>
	</div>
	<div class="user-info col-sm-6">
		<span>TODO: Change these to tables</span>
		<div class="panel panel-default">
			<div class="panel-heading text-center">Exams</div>
			<ul class="list-group">
				<li class="list-group-item"><a href="exam.php">LBAW (13/03/2016)</a></li>
				<li class="list-group-item"><a href="exam.php">PPIN (19/03/2016)</a></li>
				<li class="list-group-item"><a href="exam.php">COMP (25/05/2016)</a></li>
				<li class="list-group-item"><a href="exam.php">SDIS (02/03/2016)</a></li>
				<li class="list-group-item"><a href="exam.php">IART (30/04/2016)</a></li>
			</ul>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading text-center">Classes</div>
			<ul class="list-group">
				<li class="list-group-item"><a href="class.php">LBAW</a></li>
				<li class="list-group-item"><a href="class.php">PPIN</a></li>
				<li class="list-group-item"><a href="class.php">COMP</a></li>
				<li class="list-group-item"><a href="class.php">SDIS</a></li>
				<li class="list-group-item"><a href="class.php">IART</a></li>
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
					<div id="last-cell" class="calendar-cell" cell="31">31</div>
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

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
