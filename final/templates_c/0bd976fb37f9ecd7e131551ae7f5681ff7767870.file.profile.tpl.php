<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 14:07:14
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2128119125574fe7b2aea268-37880714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bd976fb37f9ecd7e131551ae7f5681ff7767870' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/profile.tpl',
      1 => 1465214831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2128119125574fe7b2aea268-37880714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574fe7b2e54e47_40015100',
  'variables' => 
  array (
    'usertype' => 0,
    'use_image' => 0,
    'img_url' => 0,
    'BASE_URL' => 0,
    'session_username' => 0,
    'session_name' => 0,
    'session_email' => 0,
    'description' => 0,
    'exams' => 0,
    'exam' => 0,
    'classes' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fe7b2e54e47_40015100')) {function content_574fe7b2e54e47_40015100($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
<?php if ($_smarty_tpl->tpl_vars['usertype']->value!='Administrator') {?>
	<h1>Profile</h1>
	<div class="row">
		<div id="first" class="col-lg-3 col-md-4 col-sm-12">
			<div class="box">
				<img id="user-img" class="img-circle img-responsive" src="<?php if ($_smarty_tpl->tpl_vars['use_image']->value) {?><?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
<?php } else { ?><?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('css/res/user_img/default.png');?>
<?php }?>" width="200" height="200">
				<div id="username">
					<span class="glyphicon glyphicon-credit-card"></span>
					<span><?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</span>
				</div>
				<div id="name">
					<span class="glyphicon glyphicon-user"></span>
					<span><?php echo $_smarty_tpl->tpl_vars['session_name']->value;?>
</span>
				</div>
				<div id="email">
					<span class="glyphicon glyphicon-envelope"></span>
					<span><?php echo $_smarty_tpl->tpl_vars['session_email']->value;?>
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
							<td>
								<a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/class.php?id=')).($_smarty_tpl->tpl_vars['class']->value['classid']);?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['classname'];?>
</a>
							</td>
							<td>
								<a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/profile.php?id=')).($_smarty_tpl->tpl_vars['class']->value['profid']);?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
</a>
							</td>
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
			<div id="options" class="box">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='Administrator') {?>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/validate_accounts.php');?>
"><span class="glyphicon glyphicon-th-list"></span>Validate Accounts</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/manage_accounts.php');?>
"><span class="glyphicon glyphicon-book"></span>Manage Accounts</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/manage_exams.php');?>
"><span class="glyphicon glyphicon-file"></span>Manage Exams</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/manage_questions.php');?>
"><span class="glyphicon glyphicon-question-sign"></span>Manage Questions</a></li>
					<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=='Professor') {?>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('professor/category/create_category.php');?>
"><span class="glyphicon glyphicon-bookmark"></span>Create Category</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('professor/class/create_class.php');?>
"><span class="glyphicon glyphicon-education"></span>Create Class</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('professor/exam/create_exam.php');?>
"><span class="glyphicon glyphicon-file"></span>Create Exam</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('professor/question/create_question.php');?>
"><span class="glyphicon glyphicon-pencil"></span>Create Question</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('professor/stats/stats.php');?>
"><span class="glyphicon glyphicon-stats"></span>Statistics</a></li>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/find_classes.php');?>
"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					<?php } else { ?>
						<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/find_classes.php');?>
"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>Profile</h1>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="box">
						<img id="user-img" class="img-circle img-responsive" src="<?php if ($_smarty_tpl->tpl_vars['use_image']->value) {?><?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
<?php } else { ?><?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('css/res/user_img/default.png');?>
<?php }?>" width="200" height="200">
						<div id="username">
							<span class="glyphicon glyphicon-credit-card"></span>
							<span><?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</span>
						</div>
						<div id="name">
							<span class="glyphicon glyphicon-user"></span>
							<span><?php echo $_smarty_tpl->tpl_vars['session_name']->value;?>
</span>
						</div>
						<div id="email">
							<span class="glyphicon glyphicon-envelope"></span>
							<span><?php echo $_smarty_tpl->tpl_vars['session_email']->value;?>
</span>
						</div>
					</div>
					<div class="box">
						<h3>Description</h3>
						<span id="description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</span>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div id="admin-options" class="box">
						<ul>
							<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/validate_accounts.php');?>
"><span class="glyphicon glyphicon-th-list"></span>Validate Accounts</a></li>
							<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/manage_accounts.php');?>
"><span class="glyphicon glyphicon-book"></span>Manage Accounts</a></li>
							<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/manage_exams.php');?>
"><span class="glyphicon glyphicon-file"></span>Manage Exams</a></li>
							<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('admin/manage_questions.php');?>
"><span class="glyphicon glyphicon-question-sign"></span>Manage Questions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
