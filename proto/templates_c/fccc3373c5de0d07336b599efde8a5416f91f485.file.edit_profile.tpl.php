<?php /* Smarty version Smarty-3.1.15, created on 2016-05-29 05:06:34
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/edit_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142052089857485514859639-21585156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fccc3373c5de0d07336b599efde8a5416f91f485' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/edit_profile.tpl',
      1 => 1464491170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142052089857485514859639-21585156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5748551493c9e2_07711416',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5748551493c9e2_07711416')) {function content_5748551493c9e2_07711416($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6">
			<h1>Edit Profile</h1>
			<div class="well">
				<form action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('action/edit_profile_action.php');?>
" method="post" role="form">
					<div class="form-group">
						<label for="name">Name:</label>
						<input id="name" name="name" class="form-control" type="text"></input>
					</div>
					<input class="btn btn-primary" type="submit" value="Submit new Name"></input>
				</form>
			</div>
			<div class="well">
				<form role="form">
					<div class="form-group">
						<label for="email">Email:</label>
						<input id="email" name="email" class="form-control" type="text"></input>
					</div>
					<input class="btn btn-primary" type="submit" value="Submit new Email"></input>
				</form>
			</div>
			<div class="well">
				<form role="form">
					<div class="form-group">
						<label for="password">Password:</label>
						<input id="password" name="password" class="form-control" type="password"></input>
					</div>
					<div class="form-group">
						<label for="re-password">Confirm Password:</label>
						<input id="re-password" name="re-password" class="form-control" type="password"></input>
					</div>
					<input class="btn btn-primary" type="submit" value="Submit new Password"></input>
				</form>
			</div>
			<div class="well">
				<form role="form">
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea id="description" name="description" class="form-control" rows="6"></textarea>
					</div>
					<input class="btn btn-primary" type="submit" value="Submit new Description"></input>
				</form>
			</div>
			<div class="well">
				<form role="form">
					<div class="form-group">
						<label for="upload_img">Profile Picture:</label>
						<input id="upload_img" name="upload_img" type="file" accept="image/*"></input>
					</div>
					<input class="btn btn-primary" type="submit" value="Submit new Profile Picture"></input>
				</form>
			</div>
		</div>
	</div>
</div> <!-- wrapper -->

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
