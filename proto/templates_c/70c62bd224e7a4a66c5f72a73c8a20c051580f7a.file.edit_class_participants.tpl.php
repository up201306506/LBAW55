<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 05:33:00
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/class/edit_class_participants.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136454705957539827d54334-48455957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70c62bd224e7a4a66c5f72a73c8a20c051580f7a' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/class/edit_class_participants.tpl',
      1 => 1465097540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136454705957539827d54334-48455957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57539827e92f30_77540539',
  'variables' => 
  array (
    'classid' => 0,
    'participants' => 0,
    'participant' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57539827e92f30_77540539')) {function content_57539827e92f30_77540539($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['participant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['participant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['participants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['participant']->key => $_smarty_tpl->tpl_vars['participant']->value) {
$_smarty_tpl->tpl_vars['participant']->_loop = true;
?>
						<tr id="<?php echo $_smarty_tpl->tpl_vars['participant']->value['userid'];?>
">
							<td><?php echo $_smarty_tpl->tpl_vars['participant']->value['name'];?>
</td>
							<td>
								<button class="btn btn-danger ban">Ban</button>
								<button class="btn btn-default undo">Undo</button>
							</td>
						</tr>
					<?php } ?>
						<tr>
							<td></td>
							<td>
								<button id="done" class="btn btn-primary">Done</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
