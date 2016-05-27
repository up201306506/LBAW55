<?php /* Smarty version Smarty-3.1.15, created on 2016-05-20 11:36:11
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/common/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:961057036573ed522e65f85-71060417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce6a930f854fbbde79e5dde3411c249a9273a9f' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/common/navbar.tpl',
      1 => 1463736967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '961057036573ed522e65f85-71060417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573ed522e73e42_20622119',
  'variables' => 
  array (
    'session_username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573ed522e73e42_20622119')) {function content_573ed522e73e42_20622119($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
				<li><a href="#">Home</a></li>
				<li>
					<form class="navbar-form" action="public/search_results.php" method="post" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search"></input>
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</div>
					</form>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Options <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</a></li>
						<li><a href="edit_profile.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
						<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div> <!-- container-fluid -->
</nav> <!-- navbar --><?php }} ?>
