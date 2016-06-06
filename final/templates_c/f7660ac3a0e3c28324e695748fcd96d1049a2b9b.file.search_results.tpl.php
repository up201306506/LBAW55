<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 00:42:13
         compiled from "D:\Programs\wamp\www\LBAW55\final\templates\public\search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64965755fad04fed15-43718794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7660ac3a0e3c28324e695748fcd96d1049a2b9b' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\final\\templates\\public\\search_results.tpl',
      1 => 1465252930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64965755fad04fed15-43718794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5755fad05eb2a5_54060273',
  'variables' => 
  array (
    'search_term' => 0,
    'searched_users' => 0,
    'BASE_URL' => 0,
    'tempUser' => 0,
    'searched_classes' => 0,
    'tempClass' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5755fad05eb2a5_54060273')) {function content_5755fad05eb2a5_54060273($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Search results for "<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
"</h1>
	<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-12">
			<div class="box">
				<h3>Users</h3>
				<table id="tableUsers" class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Account Type</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['tempUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tempUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searched_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tempUser']->key => $_smarty_tpl->tpl_vars['tempUser']->value) {
$_smarty_tpl->tpl_vars['tempUser']->_loop = true;
?>
							 <tr>
							     <td><a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/profile.php?id=')).($_smarty_tpl->tpl_vars['tempUser']->value['userid']);?>
"><?php echo $_smarty_tpl->tpl_vars['tempUser']->value['name'];?>
</a></td>
							     <td class="accounttype"><?php echo $_smarty_tpl->tpl_vars['tempUser']->value['accounttypevar'];?>
</td>
							 </tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="box">
				<h3>Classes</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Manager</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['tempClass'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tempClass']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searched_classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tempClass']->key => $_smarty_tpl->tpl_vars['tempClass']->value) {
$_smarty_tpl->tpl_vars['tempClass']->_loop = true;
?>
							<tr>
							     
							     <td class="accounttype"><a href="<?php echo (($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/class.php?id=')).($_smarty_tpl->tpl_vars['tempUser']->value['classid']);?>
"><?php echo $_smarty_tpl->tpl_vars['tempClass']->value['classname'];?>
</a></td>
							     <td><?php echo $_smarty_tpl->tpl_vars['tempClass']->value['description'];?>
</td>
							     <?php if (!$_smarty_tpl->tpl_vars['tempClass']->value['password']) {?>  
							     	<td>open</td>
							     <?php } else { ?>
							     	<td>closed</td>
							     <?php }?>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12">
			<div class="my-panel">
				<div class="my-panel-header text-center">Filters</div>
				<div class="my-panel-body">
					<span>Filter by:</span>
					<div class="checkbox">
						<label><input id="profId" type="checkbox" checked/>Professors</label>
					</div>
					<div class="checkbox">
						<label><input id="studId" type="checkbox" checked/>Students</label>
					</div>
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
