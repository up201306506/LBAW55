<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 03:21:47
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/edit_exam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:998079159575226e1a0e796-32515235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5b22ab657fc321149dc744062823bba7218d28a' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/edit_exam.tpl',
      1 => 1465089701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '998079159575226e1a0e796-32515235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575226e1b39510_78681619',
  'variables' => 
  array (
    'exam' => 0,
    'error' => 0,
    'questions' => 0,
    'question' => 0,
    'answers' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575226e1b39510_78681619')) {function content_575226e1b39510_78681619($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1 id="<?php echo $_smarty_tpl->tpl_vars['exam']->value['examid'];?>
">Edit Exam</h1>
	<div class="row">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
			<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>Warning!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

				</div>
			<?php }?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="box">
				<form method="post" role="edit-date">
					<div class="form-group">
						<label for="date">Date:</label>
						<input id="date" name="date" class="form-control" type="text" placeholder="YYYY-MM-DD" required="required" value="<?php echo $_smarty_tpl->tpl_vars['exam']->value['date'];?>
">
					</div>
					<input name="edit-date" class="btn btn-primary" type="submit" value="Submit New Date">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-duration">
					<div class="form-group">
						<label for="duration">Duration:</label>
						<input id="duration" name="duration" class="form-control" type="text" placeholder="HH:MM" required="required" value="<?php echo $_smarty_tpl->tpl_vars['exam']->value['duration'];?>
">
					</div>
					<input name="edit-duration" class="btn btn-primary" type="submit" value="Submit New Duration">
				</form>
			</div>
		<?php if ($_smarty_tpl->tpl_vars['exam']->value['password']) {?>
			<div class="box">
				<form method="post" role="edit-password">
					<div class="form-group">
						<label for="new-password">New Password:</label>
						<input id="new-password" name="new-password" class="form-control" type="password" required="required">
					</div>
					<div class="form-group">
						<label for="new-re-password">Confirm Password:</label>
						<input id="new-re-password" name="new-re-password" class="form-control" type="password" required="required">
					</div>
					<input name="edit-new-password" class="btn btn-primary" type="submit" value="Submit New Password">
				</form>
			</div>
		<?php } else { ?>
			<div class="box">
				<form method="post" role="add-password">
					<div class="form-group">
						<label for="add-password">Add Password:</label>
						<input id="add-password" name="add-password" class="form-control" type="password" required="required">
					</div>
					<div class="form-group">
						<label for="add-re-password">Confirm Password:</label>
						<input id="add-re-password" name="add-re-password" class="form-control" type="password" required="required">
					</div>
					<input name="edit-add-password" class="btn btn-primary" type="submit" value="Submit New Password">
				</form>
			</div>
		<?php }?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="box">
				<form method="post" role="edit-information">
					<div class="form-group">
						<label for="information">Information:</label>
						<textarea id="information" name="information" class="form-control" required="required" rows="13"><?php echo $_smarty_tpl->tpl_vars['exam']->value['information'];?>
</textarea>
					</div>
					<input name="edit-information" class="btn btn-primary" type="submit" value="Submit New Information">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-local">
					<div class="form-group">
						<label for="local">Local:</label>
						<input id="local" type="text" name="local" class="form-control" required="required" value="<?php echo $_smarty_tpl->tpl_vars['exam']->value['local'];?>
">
					</div>
					<input name="edit-local" class="btn btn-primary" type="submit" value="Submit New Local">
				</form>
			</div>
		</div>
	</div>
	<div class="box">
		<div id="questions">
		<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
			<div id="<?php echo $_smarty_tpl->tpl_vars['question']->value['questionid'];?>
" class="input-group">
				<div class="my-panel">
					<div class="my-panel-header">
						<span><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</span>
					</div>
					<div class="my-panel-body">
					<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->tpl_vars['question']->value['questionid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
						<span><?php echo $_smarty_tpl->tpl_vars['answer']->value['answer'];?>
</span>
					<?php } ?>
					</div>
				</div>
				<span class="input-group-addon minus"><span class="glyphicon glyphicon-minus"></span></span>
			</div>
		<?php } ?>
		</div>
		<div id="center">
			<ul class="pagination">
			</ul>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
