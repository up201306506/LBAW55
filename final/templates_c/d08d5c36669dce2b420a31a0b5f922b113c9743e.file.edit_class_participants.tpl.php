<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 16:56:52
         compiled from "D:\Programs\wamp\www\LBAW55\proto\templates\professor\class\edit_class_participants.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1096757543db4396b54-01976936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd08d5c36669dce2b420a31a0b5f922b113c9743e' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\proto\\templates\\professor\\class\\edit_class_participants.tpl',
      1 => 1465104325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1096757543db4396b54-01976936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'classid' => 0,
    'allstudents' => 0,
    'student' => 0,
    'studentspermission' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57543db43f8283_23048685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57543db43f8283_23048685')) {function content_57543db43f8283_23048685($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
			<h1 id="<?php echo $_smarty_tpl->tpl_vars['classid']->value;?>
">Edit Participants</h1>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="users">
					<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allstudents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
						<tr id="<?php echo $_smarty_tpl->tpl_vars['student']->value['userid'];?>
">
							<td><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['studentspermission']->value[$_smarty_tpl->tpl_vars['student']->value['userid']]=='true') {?>
							<td>
								<button class="btn btn-danger ban">Ban</button>
							</td>
						<?php } else { ?>
							<td>
								<button class="btn btn-success add">Add</button>
							</td>
						<?php }?>
						</tr>
					<?php } ?>
					</tbody>
				</table>
				<div id="center">
					<ul class="pagination">
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
