<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 05:07:50
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/class/edit_class.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8854362605750ca74ca4c60-18487818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e02f7380826673388606951dbc7ff7866d7614e' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/class/edit_class.tpl',
      1 => 1465096054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8854362605750ca74ca4c60-18487818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5750ca74d84737_40222410',
  'variables' => 
  array (
    'participants' => 0,
    'participant' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750ca74d84737_40222410')) {function content_5750ca74d84737_40222410($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-12 col-lg-offset-1 col-md-offset-1">
			<h1>Edit Participants</h1>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="box">
								<form role="edit-name">
									<div class="form-group">
										<label for="name">Name:</label>
										<input id="name" class="form-control" type="text" name="name">
									</div>
									<input class="btn btn-primary" type="submit" name="edit-name" value="Submit New Name">
								</form>
							</div>
							<div class="box">
								<form role="edit-password">
									<div class="form-group">
										<label for="password">Password:</label>
										<input id="password" class="form-control" type="text" name="password">
									</div>
									<div class="form-group">
										<label for="re-password">Confirm Password:</label>
										<input id="re-password" class="form-control" type="text" name="re-password">
									</div>
									<input class="btn btn-primary" type="submit" name="edit-password" value="Submit New Password">
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="box">
								<form role="edit-description">
									<div class="form-group">
										<label for="description">Description:</label>
										<textarea id="description" name="description" class="form-control" rows="13"></textarea>
									</div>
									<input class="btn btn-primary" type="submit" name="edit-description" value="Submit New Description">
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="box">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Account Type</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['participant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['participant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['participants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['participant']->key => $_smarty_tpl->tpl_vars['participant']->value) {
$_smarty_tpl->tpl_vars['participant']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['participant']->value['name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['participant']->value['usertype'];?>
</td>
									<td>
										<button class="btn btn-danger" type="button">Ban</button>
										<button class="btn btn-default" type="button">Undo</button>
									</td>
								</tr>
							<?php } ?>
								<tr>
									<td></td>
									<td></td>
									<td>
										<button class="btn btn-primary" type="button">Done</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
