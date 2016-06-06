<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 12:52:16
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/category/create_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:921984948575554b2759574-52971669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66c1badbcae0d18b6ef97951d0a0929b294a3382' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/category/create_category.tpl',
      1 => 1465210335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '921984948575554b2759574-52971669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575554b2864c63_46950797',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575554b2864c63_46950797')) {function content_575554b2864c63_46950797($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
			<h1>New Category</h1>
			<div class="box">
				<form method="post" role="create-category">
					<div class="form-group">
						<label for="category">Category:</label>
						<input id="category" type="text" name="category" class="form-control">
					</div>
					<div id="center">
						<input class="btn btn-primary" type="submit" name="create" value="Create">
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
