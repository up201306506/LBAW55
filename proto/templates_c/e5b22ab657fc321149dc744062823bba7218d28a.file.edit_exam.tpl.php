<?php /* Smarty version Smarty-3.1.15, created on 2016-06-04 03:28:22
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/edit_exam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:998079159575226e1a0e796-32515235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5b22ab657fc321149dc744062823bba7218d28a' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/edit_exam.tpl',
      1 => 1465003700,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575226e1b39510_78681619')) {function content_575226e1b39510_78681619($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Edit Exam</h1>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="box">
				<form method="post" role="edit-date">
					<div class="form-group">
						<label for="date">Date:</label>
						<input id="date" class="form-control" type="text" placeholder="DD/MM/YYYY" required="required" value="<?php echo $_smarty_tpl->tpl_vars['exam']->value['date'];?>
">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Date">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-duration">
					<div class="form-group">
						<label for="duration">Duration:</label>
						<input id="duration" class="form-control" type="text" placeholder="HH:MM" required="required" value="<?php echo $_smarty_tpl->tpl_vars['exam']->value['duration'];?>
">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Duration">
				</form>
			</div>
		<?php if ($_smarty_tpl->tpl_vars['exam']->value['password']) {?>
			<div class="box">
				<form method="post" role="edit-password">
					<div class="form-group">
						<label for="new-password">New Password:</label>
						<input id="new-password" class="form-control" type="password" required="required">
					</div>
					<div class="form-group">
						<label for="new-re-password">Confirm Password:</label>
						<input id="new-re-password" class="form-control" type="password" required="required">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Password">
				</form>
			</div>
		<?php } else { ?>
			<div class="box">
				<form method="post" role="add-password">
					<div class="form-group">
						<label for="add-password">Add Password:</label>
						<input id="add-password" class="form-control" type="password" required="required">
					</div>
					<div class="form-group">
						<label for="add-re-password">Confirm Password:</label>
						<input id="add-re-password" class="form-control" type="password" required="required">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Password">
				</form>
			</div>
		<?php }?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="box">
				<form method="post" role="edit-information">
					<div class="form-group">
						<label for="information">Add Password:</label>
						<textarea id="information" class="form-control" required="required" rows="4"><?php echo $_smarty_tpl->tpl_vars['exam']->value['information'];?>
</textarea>
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Information">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-correct-value">
					<div class="form-group">
						<label for="correct-value">Correct Answer Value:</label>
						<input id="correct-value" type="text" class="form-control" required="required">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Value">
				</form>
			</div>
			<div class="box">
				<form method="post" role="edit-incorrect-value">
					<div class="form-group">
						<label for="incorrect-value">Incorrect Answer Value:</label>
						<input id="incorrect-value" type="text" class="form-control" required="required">
					</div>
					<input class="btn btn-primary" type="submit" value="Submit New Value">
				</form>
			</div>
		</div>
	</div>
	<div class="box">
		TODO: where you have the choice to remove a question from the exam
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
