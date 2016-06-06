<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 00:55:21
         compiled from "D:\Programs\wamp\www\LBAW55\final\templates\admin\manage_accounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158975755ff1deadd55-98439875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cd06ab70f56ed04b674f741423a1c33d596c10a' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\final\\templates\\admin\\manage_accounts.tpl',
      1 => 1465253718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158975755ff1deadd55-98439875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5755ff1df27923_99124604',
  'variables' => 
  array (
    'userlist' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5755ff1df27923_99124604')) {function content_5755ff1df27923_99124604($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Manage Accounts</h1>
	<div class="box">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Username</th>
					<th>Name</th>
					<th>Email</th>
					<th>Account Type</th>
					<th>State</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="users">
			<?php if (!$_smarty_tpl->tpl_vars['userlist']->value) {?>
				<tr>
					<td>The loneliest website ever! You're all alone here, admin.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			<?php } else { ?>
				<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
				<tr id="<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
">
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['accounttypevar'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['isactive'];?>
</td>
					<td>
					<?php if ($_smarty_tpl->tpl_vars['user']->value['isactive']=='Active') {?>
						<button class="btn btn-danger ban">Ban</button>
					<?php } else { ?>
						<button class="btn btn-success unban">Unban</button>
					<?php }?>
					</td>
				</tr>
				<?php } ?>
			<?php }?>
			</tbody>
		</table>
		<nav id="center">
			<ul class="pagination">
			</ul>
		</nav>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
