<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 05:05:54
         compiled from "D:\Programs\wamp\www\LBAW55\proto\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2641257543686033236-86438901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd48b85caf4417af5a93f7ea2b0409e9faafbe9f8' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\proto\\templates\\index.tpl',
      1 => 1465181318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2641257543686033236-86438901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575436861d2964_85535253',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575436861d2964_85535253')) {function content_575436861d2964_85535253($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<nav class="navbar navbar-fixed-top">
	<div class="container-fluid">
		<a id="brand-name" href="#">ElDoom</a>
		<ul id="options">
			<li><a href="login_signup.php"><span class="glyphicon glyphicon-log-in"></span>Log In</a></li>
			<li><a href="login_signup.php"><span class="glyphicon glyphicon-edit"></span>Sign Up</a></li>
		</ul>
	</div>
</nav>
<div id="page-img"></div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="box">
				<img class="img-circle img-responsive" src="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('css/res/light-bulb-icon.png');?>
">
				<h3>Easy to Use</h3>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="box">
				<img class="img-circle img-responsive" src="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('css/res/light-bulb-icon.png');?>
">
				<h3>Efficient Exam Management</h3>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="box">
				<img class="img-circle img-responsive" src="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('css/res/light-bulb-icon.png');?>
">
				<h3>Best Way to Organize your Learning Groups</h3>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
