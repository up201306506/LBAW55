<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 03:16:53
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/public/enroll_class.tpl" */ ?>
<?php /*%%SmartyHeaderCode:895116285575043f72fdd04-98082752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77a2b5745b57018698858586b04f39030105220b' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/public/enroll_class.tpl',
      1 => 1464916087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '895116285575043f72fdd04-98082752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575043f73ce395_40176823',
  'variables' => 
  array (
    'classid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575043f73ce395_40176823')) {function content_575043f73ce395_40176823($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>Please insert a password</h1>
			<div class="box">
				<form action="../action/enroll_class_action.php?id=<?php echo $_smarty_tpl->tpl_vars['classid']->value;?>
" method="post" role="enroll">
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
