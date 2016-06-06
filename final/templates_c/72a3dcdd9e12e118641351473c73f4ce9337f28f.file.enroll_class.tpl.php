<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 05:03:05
         compiled from "D:\Programs\wamp\www\LBAW55\proto\templates\public\enroll_class.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31855754369e71da91-57136540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72a3dcdd9e12e118641351473c73f4ce9337f28f' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\proto\\templates\\public\\enroll_class.tpl',
      1 => 1465181318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31855754369e71da91-57136540',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5754369e941669_90544023',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5754369e941669_90544023')) {function content_5754369e941669_90544023($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>Please insert a password</h1>
			<div class="box">
				<form method="post" role="enroll">
					<div class="form-group">
						<label for="password">Password:</label>
						<input id="password" class="form-control" type="password" name="password" required="required">
					</div>
					<div id="center">
						<input name="submit" class="btn btn-primary" type="submit" value="Enroll">
					</div>
				</form>
			</div>
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
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
