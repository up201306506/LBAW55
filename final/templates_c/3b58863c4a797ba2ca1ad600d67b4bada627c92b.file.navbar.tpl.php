<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 00:35:56
         compiled from "D:\Programs\wamp\www\LBAW55\final\templates\common\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252565755facc7b0292-70466970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b58863c4a797ba2ca1ad600d67b4bada627c92b' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\final\\templates\\common\\navbar.tpl',
      1 => 1465221287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252565755facc7b0292-70466970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'session_username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5755facc7d3133_75240687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5755facc7d3133_75240687')) {function content_5755facc7d3133_75240687($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">ElDoom</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li>
					<form class="navbar-form" action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('public/search_results.php');?>
" method="get" role="search">
						<div class="input-group">
							<input id="search-term" name="search-term" type="text" class="form-control" placeholder="Search">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</div>
					</form>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('profile/profile.php');?>
"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</a></li>
				<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('profile/edit_profile.php');?>
"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
				<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('action/logout_action.php');?>
"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</div> <!-- container-fluid -->
</nav> <!-- navbar --><?php }} ?>
