<?php /* Smarty version Smarty-3.1.15, created on 2016-06-02 10:10:02
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/login_signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1904439738574fe9da415176-87693367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99be8f636e3cef78b226168ba309a9095461771' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/login_signup.tpl',
      1 => 1464821764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1904439738574fe9da415176-87693367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574fe9da55d1f2_20469577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fe9da55d1f2_20469577')) {function content_574fe9da55d1f2_20469577($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<div class="box">
				<ul id="tabs">
					<li class="tab-link current" data-tab="tab-1">Log In</li>
					<li class="tab-link" data-tab="tab-2">Sign Up</li>
				</ul>
				<div class="tab-content current" id="tab-1">
					<form action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('action/login_request.php');?>
" method="post" role="form">
						<div class="form-group">
							<div class="input-group">
								<input name="username" class="form-control" type="text" placeholder="Username">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-credit-card"></span>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input name="password" class="form-control" type="password" placeholder="Password">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
							</div>
						</div>
						<div>
							<input class="btn btn-primary" type="submit" value="Log In">
						</div>
					</form>
				</div>
				<div class="tab-content" id="tab-2">
					<form action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('action/create_user.php');?>
" method="post" role="form">
						<div class="form-group">
							<div class="input-group">
								<input name="username" class="form-control" type="text" placeholder="Username">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-credit-card"></span>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input name="name" class="form-control" type="text" placeholder="Name">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input name="email" class="form-control" type="text" placeholder="Email">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input name="password" class="form-control" type="password" placeholder="Password">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
							</div>
						</div>
						<div id="radios" class="form-group">
							<div class="radio-inline">
								<label><input type="radio" name="usertype" value="Student">Student</label>
							</div>
							<div class="radio-inline">
								<label><input type="radio" name="usertype" value="Professor">Professor</label>
							</div>
						</div>
						<div>
							<input class="btn btn-primary" type="submit" value="Sign Up">
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
