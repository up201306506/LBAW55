<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 06:18:03
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/exam/create_exam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:670833142575461b3c68d45-39691758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc22be6c8fd594efe3e3d0dc8cf9ebbff52d9236' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/exam/create_exam.tpl',
      1 => 1465186681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670833142575461b3c68d45-39691758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575461b3d93108_30754134',
  'variables' => 
  array (
    'classes' => 0,
    'class' => 0,
    'categories' => 0,
    'category' => 0,
    'questions' => 0,
    'question' => 0,
    'answers' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575461b3d93108_30754134')) {function content_575461b3d93108_30754134($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>New Exam</h1>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>Warning!</strong><span id="error"></span>
			</div>
		</div>
	</div>
	<div class="box">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="form-group">
					<label for="class">Class:</label>
					<select id="class" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['class']->value['classid'];?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['classname'];?>
</option>
					<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="identification">Identification:</label>
					<input id="identification" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="date">Date:</label>
					<input id="date" class="form-control" type="text" placeholder="YYYY-MM-DD">
				</div>
				<div class="form-group">
					<label for="hour">Begining Time:</label>
					<input id="hour" class="form-control" type="text" placeholder="HH:MM">
				</div>
				<div class="form-group">
					<label for="duration">Duration:</label>
					<input id="duration" class="form-control" type="text" placeholder="MM">
				</div>
				<div class="form-group">
					<label for="local">Local:</label>
					<input id="local" class="form-control" type="text">
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div id="pass" class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="password">Password (Optional):</label>
							<input id="password" class="form-control" type="password">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="re-password">Confirm Password:</label>
							<input id="re-password" class="form-control" type="password">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="information">Information:</label>
					<textarea id="information" class="form-control" rows="12" required="required"></textarea>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="correct">Correct Answer Value:</label>
							<input id="correct" class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="incorrect">Incorrect Answer Value:</label>
							<input id="incorrect" class="form-control" type="text">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box">
		<h3>Questions</h3>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-2">
				<div class="form-group">
					<label for="category">Category:</label>
					<select id="category" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['categoryid'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['type'];?>
</option>
					<?php } ?>
					</select>
				</div>
			</div>
		</div>
		<div id="questions">
		<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
			<div id="<?php echo $_smarty_tpl->tpl_vars['question']->value['questionid'];?>
" class="input-group question">
				<div class="my-panel">
					<div class="my-panel-header">
						<span><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</span>
					</div>
					<div class="my-panel-body">
						<ul>
						<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->tpl_vars['question']->value['questionid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
							<li><span><?php echo $_smarty_tpl->tpl_vars['answer']->value['answer'];?>
</span></li>
						<?php } ?>
						</ul>
					</div>
				</div>
				<span class="input-group-addon plus"><span class="glyphicon glyphicon-plus"></span></span>
			</div>
		<?php } ?>
		</div>
		<ul class="pagination">
		</ul>
		<button id="done" type="button" class="btn btn-primary">Done</button>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
