<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 06:56:39
         compiled from "D:\Programs\wamp\www\LBAW55\proto\templates\public\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128075754e4f0841025-46013497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869b71fe43465800aac2fb3c27f908c5e1c9ddff' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\proto\\templates\\public\\profile.tpl',
      1 => 1465182013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128075754e4f0841025-46013497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5754e4f0949678_18521941',
  'variables' => 
  array (
    'use_image' => 0,
    'img_url' => 0,
    'BASE_URL' => 0,
    'name' => 0,
    'email' => 0,
    'description' => 0,
    'classes' => 0,
    'class' => 0,
    'month' => 0,
    'interval' => 0,
    'int' => 0,
    'days' => 0,
    'day' => 0,
    'usertype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5754e4f0949678_18521941')) {function content_5754e4f0949678_18521941($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Profile</h1>
	<div class="row">
		<div id="first" class="col-lg-3 col-md-4 col-sm-12">
			<div class="box">
				<img id="user-img" class="img-circle img-responsive" src="<?php if ($_smarty_tpl->tpl_vars['use_image']->value) {?><?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
<?php } else { ?><?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('css/res/user_img/default.png');?>
<?php }?>" width="200" height="200">
				<div id="name">
					<span class="glyphicon glyphicon-user"></span>
					<span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
				</div>
				<div id="email">
					<span class="glyphicon glyphicon-envelope"></span>
					<span><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>
				</div>
			</div>
			<div class="box">
				<h3>Description</h3>
				<span id="description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</span>
			</div>
		</div>
		<div class="col-lg-6 col-md-8 col-sm-12">
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Manager</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
?>
						<tr>
							<td><a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/class.php?id=')).($_smarty_tpl->tpl_vars['class']->value['classid']);?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['classname'];?>
</a></td>
							<td><a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/profile.php?id=')).($_smarty_tpl->tpl_vars['class']->value['profid']);?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
</a></td>
						<?php if ($_smarty_tpl->tpl_vars['class']->value['classpass']) {?>
							<td>Private</td>
						<?php } else { ?>
							<td>Public</td>
						<?php }?>
						</tr>
					<?php } ?>
					</tbody>
				</table>
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
