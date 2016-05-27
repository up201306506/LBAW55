<?php /* Smarty version Smarty-3.1.15, created on 2016-05-27 23:41:48
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/class/create_class.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2871455165748bf1c7fbe17-11563692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '965fbc5dc050c65b5a743205b149e6ba0256f353' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/class/create_class.tpl',
      1 => 1464385094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2871455165748bf1c7fbe17-11563692',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5748bf1c8a7bd3_72039419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5748bf1c8a7bd3_72039419')) {function content_5748bf1c8a7bd3_72039419($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6">
			<h1>New Class</h1>
			<div class="well">
				<form action="#" method="post" role="form">
					<div class="form-group">
						<label for="classname">Name of the Class:</label>
						<input id="classname" class="form-control" type="text"></input>
					</div>
					<div class="form-group">
						<label for="password">Password (Optional):</label>
						<input id="password" class="form-control" type="password"></input>
					</div>
					<div class="form-group">
						<label for="re-password">Confirm Password:</label>
						<input id="re-password" class="form-control" type="password"></input>
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea id="description" class="form-control" rows="6"></textarea>
					</div>
					<input id="submit" class="btn btn-primary" type="submit" value="Done"></input>
				</form>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
