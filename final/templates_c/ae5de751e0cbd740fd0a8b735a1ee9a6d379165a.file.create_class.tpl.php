<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 05:06:11
         compiled from "D:\Programs\wamp\www\LBAW55\proto\templates\professor\class\create_class.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88135754e8a3911004-12349826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae5de751e0cbd740fd0a8b735a1ee9a6d379165a' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\proto\\templates\\professor\\class\\create_class.tpl',
      1 => 1465104325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88135754e8a3911004-12349826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'professors' => 0,
    'professor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5754e8a39d70c1_72247327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5754e8a39d70c1_72247327')) {function content_5754e8a39d70c1_72247327($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h1>New Class</h1>
			<div class="box">
				<form role="form">
					<div class="form-group">
						<label for="classname">Name of the Class:</label>
						<input id="classname" class="form-control" type="text" required="required"></input>
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
						<textarea id="description" class="form-control" rows="6" required="required"></textarea>
					</div>
					<input id="done" class="btn btn-primary" type="submit" value="Done"></input>
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
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h1>Add Professors</h1>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="users">
					<?php  $_smarty_tpl->tpl_vars['professor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['professor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['professors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['professor']->key => $_smarty_tpl->tpl_vars['professor']->value) {
$_smarty_tpl->tpl_vars['professor']->_loop = true;
?>
						<tr id="<?php echo $_smarty_tpl->tpl_vars['professor']->value['userid'];?>
">
							<td><?php echo $_smarty_tpl->tpl_vars['professor']->value['name'];?>
</td>
							<td>
								<button type="button" class="btn btn-success add">Add</button>
								<button type="button" class="btn btn-default undo">Undo</button>
							</td>
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
