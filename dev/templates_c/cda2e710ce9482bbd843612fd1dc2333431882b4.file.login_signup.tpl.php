<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 10:39:00
         compiled from "D:\Programs\wamp\www\LBAW55\dev\templates\login_signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18253573592a472e559-57219882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cda2e710ce9482bbd843612fd1dc2333431882b4' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\dev\\templates\\login_signup.tpl',
      1 => 1462982238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18253573592a472e559-57219882',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573592a4763937_00832802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573592a4763937_00832802')) {function content_573592a4763937_00832802($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<h1 class="title">eldooM</h1>
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

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
