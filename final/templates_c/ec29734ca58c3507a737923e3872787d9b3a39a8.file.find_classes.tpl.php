<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 14:21:49
         compiled from "D:\Programs\wamp\www\LBAW55\proto\templates\public\find_classes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1362957515b241c7a30-93494869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec29734ca58c3507a737923e3872787d9b3a39a8' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\proto\\templates\\public\\find_classes.tpl',
      1 => 1464956507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1362957515b241c7a30-93494869',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57515b2448fbd7_50450871',
  'variables' => 
  array (
    'all_classes' => 0,
    'class' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57515b2448fbd7_50450871')) {function content_57515b2448fbd7_50450871($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
			<h1>List of All Classes</h1>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Manager</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['class']->value['classpass']) {?>
						<tr>
							<td>
								<a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/class.php?id=')).($_smarty_tpl->tpl_vars['class']->value['classid']);?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['classname'];?>
</a>
							</td>
							<td>
								<a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/profile.php?id=')).($_smarty_tpl->tpl_vars['class']->value['userid']);?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
</a>
							</td>
							<td>Private</td>
						</tr>
						<?php } else { ?>
						<tr>
							<td>
								<a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/class.php?id=')).($_smarty_tpl->tpl_vars['class']->value['classid']);?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['classname'];?>
</a>
							</td>
							<td>
								<a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/profile.php?id=')).($_smarty_tpl->tpl_vars['class']->value['userid']);?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
</a>
							</td>
							<td>Public</td>
						</tr>
						<?php }?>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
