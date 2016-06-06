<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 14:00:05
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/edit_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1155752256574fee39cca721-63215288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fccc3373c5de0d07336b599efde8a5416f91f485' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/edit_profile.tpl',
      1 => 1465187950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1155752256574fee39cca721-63215288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574fee39e4e910_34813664',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fee39e4e910_34813664')) {function content_574fee39e4e910_34813664($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<h1>Edit Profile</h1>
			<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>Warning!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

			</div>
			<?php }?>
			<div class="box">
				<form method="post" role="form">
					<div class="form-group">
						<label for="name">Name:</label>
						<input id="name" name="name" class="form-control" type="text" required="required"></input>
					</div>
					<input name="edit-name" class="btn btn-primary" type="submit" value="Submit new Name"></input>
				</form>
			</div>
			<div class="box">
				<form method="post" role="form">
					<div class="form-group">
						<label for="email">Email:</label>
						<input id="email" name="email" class="form-control" type="text" required="required"></input>
					</div>
					<input name="edit-email" class="btn btn-primary" type="submit" value="Submit new Email"></input>
				</form>
			</div>
			<div class="box">
				<form method="post" role="form">
					<div class="form-group">
						<label for="password">Password:</label>
						<input id="password" name="password" class="form-control" type="password" required="required"></input>
					</div>
					<div class="form-group">
						<label for="re-password">Confirm Password:</label>
						<input id="re-password" name="re-password" class="form-control" type="password" required="required"></input>
					</div>
					<input name="edit-password" class="btn btn-primary" type="submit" value="Submit new Password"></input>
				</form>
			</div>
			<div class="box">
				<form method="post" role="form">
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea id="description" name="description" class="form-control" rows="6" required="required"></textarea>
					</div>
					<input name="edit-description" class="btn btn-primary" type="submit" value="Submit new Description"></input>
				</form>
			</div>
			<div class="box">
				<form method="post" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="upload_img">Profile Picture:</label>
						<input id="upload_img" name="upload_img" type="file" accept="image/*" required="required"></input>
					</div>
					<input name="edit-profile-pic" class="btn btn-primary" type="submit" name="submit" value="Submit new Profile Picture"></input>
				</form>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
