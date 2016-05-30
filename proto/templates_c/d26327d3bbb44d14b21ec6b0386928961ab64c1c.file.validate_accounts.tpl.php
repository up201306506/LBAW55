<?php /* Smarty version Smarty-3.1.15, created on 2016-05-31 00:43:49
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/validate_accounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1265668929574cc0a6befb57-82956102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd26327d3bbb44d14b21ec6b0386928961ab64c1c' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/validate_accounts.tpl',
      1 => 1464648227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1265668929574cc0a6befb57-82956102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574cc0a6ce2024_44608143',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cc0a6ce2024_44608143')) {function content_574cc0a6ce2024_44608143($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Pending Accounts</h1>
	<div class="box">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Validate</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Name</td>
					<td>Username</td>
					<td>Email</td>
					<td>
						<button class="btn btn-success ok-option">
							<span class="glyphicon glyphicon-ok"></span>
						</button>
						<button class="btn btn-danger remove-option">
							<span class="glyphicon glyphicon-remove"></span>
						</button>
						<button class="btn btn-default undo-option">Undo</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
