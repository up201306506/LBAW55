<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 00:49:16
         compiled from "D:\Programs\wamp\www\LBAW55\final\templates\admin\validate_accounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300875755fdec59f022-14816169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a581583f4a09b4573381f4474e514e470a87ee5' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\final\\templates\\admin\\validate_accounts.tpl',
      1 => 1464940628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300875755fdec59f022-14816169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'professor_list' => 0,
    'professor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5755fdec64b1f9_62287830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5755fdec64b1f9_62287830')) {function content_5755fdec64b1f9_62287830($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
			<?php if (!$_smarty_tpl->tpl_vars['professor_list']->value) {?>
				<tr>
					<td><span class="empty_list">There are no professors left to validate!</span></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			<?php } else { ?>
				<form role="validate">
				<?php  $_smarty_tpl->tpl_vars['professor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['professor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['professor_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['professor']->key => $_smarty_tpl->tpl_vars['professor']->value) {
$_smarty_tpl->tpl_vars['professor']->_loop = true;
?>
					<tr id="<?php echo $_smarty_tpl->tpl_vars['professor']->value['userid'];?>
">
						<td><?php echo $_smarty_tpl->tpl_vars['professor']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['professor']->value['username'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['professor']->value['email'];?>
</td>
						<td>
							<button type="button" class="btn btn-success ok-option">
								<span class="glyphicon glyphicon-ok"></span>
							</button>
							<button type="button" class="btn btn-danger remove-option">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
							<button type="button" class="btn btn-default undo-option">Undo</button>
						</td>
					</tr>
				<?php } ?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<input id="done" class="btn btn-primary" type="submit" value="Done">
						</td>
					</tr>
				</form>
			<?php }?>
			</tbody>
		</table>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
