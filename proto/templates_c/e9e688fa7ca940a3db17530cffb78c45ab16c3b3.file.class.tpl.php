<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 05:09:30
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/public/class.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1090193883574fed098bc8a5-58355018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e688fa7ca940a3db17530cffb78c45ab16c3b3' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/public/class.tpl',
      1 => 1465096096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090193883574fed098bc8a5-58355018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574fed09bf7c38_70267086',
  'variables' => 
  array (
    'class' => 0,
    'manager' => 0,
    'usertype' => 0,
    'this_class_belong' => 0,
    'BASE_URL' => 0,
    'exams' => 0,
    'exam' => 0,
    'participants' => 0,
    'participant' => 0,
    'month' => 0,
    'interval' => 0,
    'int' => 0,
    'days' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fed09bf7c38_70267086')) {function content_574fed09bf7c38_70267086($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1><?php echo $_smarty_tpl->tpl_vars['class']->value['classname'];?>
</h1>
	<div class="row">
		<div id="first" class="col-lg-3 col-md-4 col-sm-12">
			<div id="class-info" class="box">
				<h3>Information</h3>
				<span>Created by: <?php echo $_smarty_tpl->tpl_vars['manager']->value;?>
</span>
				<span>Date: <?php echo $_smarty_tpl->tpl_vars['class']->value['creationdate'];?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='Professor') {?>
			<?php if ($_smarty_tpl->tpl_vars['this_class_belong']->value) {?>
				<div id="center-edit">
					<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
professor/class/edit_class_participants.php?id=<?php echo $_smarty_tpl->tpl_vars['class']->value['classid'];?>
">Edit Participants</a>
				</div>
			<?php }?>
			<?php } else { ?>
			<?php if (!$_smarty_tpl->tpl_vars['this_class_belong']->value) {?>
				<div id="center-edit">
					<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
action/enroll_class_action.php?id=<?php echo $_smarty_tpl->tpl_vars['class']->value['classid'];?>
">Enroll Class</a>
				</div>
			<?php }?>
			<?php }?>
			</div>
			<div class="box">
				<h3>Description</h3>
				<span><?php echo $_smarty_tpl->tpl_vars['class']->value['description'];?>
</span>
			</div>
		</div>
		<div class="col-lg-6 col-md-8 col-sm-12">
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['exam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exam']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exam']->key => $_smarty_tpl->tpl_vars['exam']->value) {
$_smarty_tpl->tpl_vars['exam']->_loop = true;
?>
						<tr>
							<td><a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('student/exam/exam.php?id=')).($_smarty_tpl->tpl_vars['exam']->value['examid']);?>
"><?php echo $_smarty_tpl->tpl_vars['exam']->value['examidentification'];?>
</a></td>
							<td><?php echo $_smarty_tpl->tpl_vars['exam']->value['date'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['exam']->value['password']) {?>
							<td>Private</td>
						<?php } else { ?>
							<td>Public</td>
						<?php }?>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<div id="participants" class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Account Type</th>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['participant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['participant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['participants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['participant']->key => $_smarty_tpl->tpl_vars['participant']->value) {
$_smarty_tpl->tpl_vars['participant']->_loop = true;
?>
						<tr>
							<td><a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/profile.php?id=')).($_smarty_tpl->tpl_vars['participant']->value['userid']);?>
"><?php echo $_smarty_tpl->tpl_vars['participant']->value['name'];?>
</a></td>
							<td><?php echo $_smarty_tpl->tpl_vars['participant']->value['accounttypevar'];?>
</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<div id="center">
				<button id="shide" class="btn btn-default">Show Participants</button>
			</div>
		</div>
		<div id="third" class="col-lg-3 col-md-4 col-sm-12">
			<div id="events" class="box">
				<h5>ONGOING</h5>
				<span> - Nothing to report</span>
				<h5>COMING SOON</h5>
				<span> - Nothing to report</span>
			</div>
			<div id="calendar" class="box">
				<ul id="month">
					<li><a href="#"><span class="glyphicon glyphicon-triangle-left"></span></a></li>
					<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('profile/calendar.php');?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span></a></li>
				</ul>
				<ul id="weekdays">
					<li><abbr title="Monday">Mon</abbr></li>
					<li><abbr title="Tuesday">Tue</abbr></li>
					<li><abbr title="Wednesday">Wed</abbr></li>
					<li><abbr title="Thursday">Thu</abbr></li>
					<li><abbr title="Friday">Fri</abbr></li>
					<li><abbr title="Saturday">Sat</abbr></li>
					<li><abbr title="Sunday">Sun</abbr></li>
				</ul>
				<ul id="days">
				<?php $_smarty_tpl->tpl_vars['int'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['int']->step = 1;$_smarty_tpl->tpl_vars['int']->total = (int) ceil(($_smarty_tpl->tpl_vars['int']->step > 0 ? $_smarty_tpl->tpl_vars['interval']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['interval']->value)+1)/abs($_smarty_tpl->tpl_vars['int']->step));
if ($_smarty_tpl->tpl_vars['int']->total > 0) {
for ($_smarty_tpl->tpl_vars['int']->value = 1, $_smarty_tpl->tpl_vars['int']->iteration = 1;$_smarty_tpl->tpl_vars['int']->iteration <= $_smarty_tpl->tpl_vars['int']->total;$_smarty_tpl->tpl_vars['int']->value += $_smarty_tpl->tpl_vars['int']->step, $_smarty_tpl->tpl_vars['int']->iteration++) {
$_smarty_tpl->tpl_vars['int']->first = $_smarty_tpl->tpl_vars['int']->iteration == 1;$_smarty_tpl->tpl_vars['int']->last = $_smarty_tpl->tpl_vars['int']->iteration == $_smarty_tpl->tpl_vars['int']->total;?>
					<li class="blank"><?php echo $_smarty_tpl->tpl_vars['int']->value;?>
</li>
				<?php }} ?>
				<?php $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['day']->step = 1;$_smarty_tpl->tpl_vars['day']->total = (int) ceil(($_smarty_tpl->tpl_vars['day']->step > 0 ? $_smarty_tpl->tpl_vars['days']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['days']->value)+1)/abs($_smarty_tpl->tpl_vars['day']->step));
if ($_smarty_tpl->tpl_vars['day']->total > 0) {
for ($_smarty_tpl->tpl_vars['day']->value = 1, $_smarty_tpl->tpl_vars['day']->iteration = 1;$_smarty_tpl->tpl_vars['day']->iteration <= $_smarty_tpl->tpl_vars['day']->total;$_smarty_tpl->tpl_vars['day']->value += $_smarty_tpl->tpl_vars['day']->step, $_smarty_tpl->tpl_vars['day']->iteration++) {
$_smarty_tpl->tpl_vars['day']->first = $_smarty_tpl->tpl_vars['day']->iteration == 1;$_smarty_tpl->tpl_vars['day']->last = $_smarty_tpl->tpl_vars['day']->iteration == $_smarty_tpl->tpl_vars['day']->total;?>
					<li><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</li>
				<?php }} ?>
				</ul>
			</div>
			<div id="options" class="box">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='Administrator') {?>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/validate_accounts.php');?>
"><span class="glyphicon glyphicon-th-list"></span>Validate Professor Accounts</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/manage_database.php');?>
"><span class="glyphicon glyphicon-folder-close"></span>Manage Database</a></li>
					<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=='Professor') {?>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('professor/class/create_class.php');?>
"><span class="glyphicon glyphicon-education"></span>Create Class</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('professor/exam/create_exam.php');?>
"><span class="glyphicon glyphicon-file"></span>Create Exam</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('professor/question/create_question.php');?>
"><span class="glyphicon glyphicon-pencil"></span>Create Question</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('professor/statistics/statistics.php');?>
"><span class="glyphicon glyphicon-stats"></span>Statistics</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/review_grades.php');?>
"><span class="glyphicon glyphicon-list"></span>Review Grades</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/find_classes.php');?>
"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					<?php } else { ?>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/review_grades.php');?>
"><span class="glyphicon glyphicon-list-alt"></span>Review Grades</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/find_classes.php');?>
"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
