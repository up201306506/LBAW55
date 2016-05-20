<?php /* Smarty version Smarty-3.1.15, created on 2016-05-20 11:34:09
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/login_signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1652707502573ed4f8154678-76242170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99be8f636e3cef78b226168ba309a9095461771' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/login_signup.tpl',
      1 => 1463736844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652707502573ed4f8154678-76242170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573ed4f81f97b9_71440224',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573ed4f81f97b9_71440224')) {function content_573ed4f81f97b9_71440224($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1 class="title">ElDoom</h1>
<div class="container-parent">
	<div class="container">
		<div class="col-sm-offset-3 col-sm-6">
			<ul class="tabs">
				<li class="tab-link current" data-tab="tab-1">Log In</li>
				<li class="tab-link" data-tab="tab-2">Sign Up</li>
			</ul>
			<div class="tab-content current" id="tab-1">
				<div id="login-form">
					<form class="form-horizontal" action="action/login_request.php" method="post" role="form">
						<div class="form-group">
							<input name="username" id="username" class="form-control" type="text" placeholder="USERNAME">
						</div>
						<div class="form-group">
							<input name="password" id="password" class="form-control" type="password" placeholder="PASSWORD">
						</div>
						<div class="form-group">
							<input class="btn btn-default" type="submit" value="Log In">
						</div>
					</form>
				</div>
			</div>
			<div class="tab-content" id="tab-2">
				<div id="signup-form">
					<form class="form-horizontal" action="action/create_user.php" method="post" role="form">
						<div class="form-group">
							<input name="username" id="username" class="form-control" type="text" placeholder="USERNAME">
						</div>
						<div class="form-group">
							<input name="name" id="name" class="form-control" type="text" placeholder="NAME">
						</div>
						<div class="form-group">
							<input name="email" id="email" class="form-control" type="text" placeholder="EMAIL">
						</div>
						<div class="form-group">
							<input name="password" id="password" class="form-control" type="password" placeholder="PASSWORD">
						</div>
						<div class="form-group radio-group">
							<label class="radio-inline"><input type="radio" name="opUsertype" value='Student' checked/>Student</label>
							<label class="radio-inline"><input type="radio" name="opUsertype" value='Professor' />Professor</label>
						</div>
						<div class="form-group">
							<input class="btn btn-default" type="submit" value="Sign Up">
						</div>
					</form>
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
