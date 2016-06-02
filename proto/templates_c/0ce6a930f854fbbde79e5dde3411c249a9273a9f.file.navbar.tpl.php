<?php /* Smarty version Smarty-3.1.15, created on 2016-06-02 10:00:51
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/common/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2092906410574fe7b3020360-75974767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce6a930f854fbbde79e5dde3411c249a9273a9f' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/common/navbar.tpl',
      1 => 1464821764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2092906410574fe7b3020360-75974767',
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
  'unifunc' => 'content_574fe7b30c3d66_68448775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fe7b30c3d66_68448775')) {function content_574fe7b30c3d66_68448775($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
							<input id="search-term" name="search-term" type="text" class="form-control" placeholder="Search"></input>
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
				<li><a href="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('action/logout_request.php');?>
"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</div> <!-- container-fluid -->
</nav> <!-- navbar --><?php }} ?>
