<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 09:06:34
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/student/exam/enroll_exam.tpl" */ ?>
<?php /*%%SmartyHeaderCode:766390807575051f93e3fe7-45370896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0fe0e0d20f2938669e1ada8733992df246fa56' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/student/exam/enroll_exam.tpl',
      1 => 1465196489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '766390807575051f93e3fe7-45370896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575051f94d6649_89908948',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575051f94d6649_89908948')) {function content_575051f94d6649_89908948($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>Please insert a password</h1>
			<div class="box">
				<form method="post" role="enroll">
					<div class="form-group">
						<label for="password">Password:</label>
						<input class="form-control" type="password" name="password" required="required">
					</div>
					<div id="center">
						<input class="btn btn-primary" type="submit" value="Enroll">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
