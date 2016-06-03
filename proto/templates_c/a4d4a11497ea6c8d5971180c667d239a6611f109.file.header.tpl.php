<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 16:07:29
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1123639300574fe7b2e5df43-25144121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4d4a11497ea6c8d5971180c667d239a6611f109' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/common/header.tpl',
      1 => 1464962657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1123639300574fe7b2e5df43-25144121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574fe7b3019429_68949578',
  'variables' => 
  array (
    'pagename' => 0,
    'jquery' => 0,
    'bootstrap' => 0,
    'csspage' => 0,
    'cssnavbar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fe7b3019429_68949578')) {function content_574fe7b3019429_68949578($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?php echo $_smarty_tpl->tpl_vars['pagename']->value;?>
</title>

	<?php if (!empty($_smarty_tpl->tpl_vars['jquery']->value)) {?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo $_smarty_tpl->tpl_vars['jquery']->value;?>
"></script>
	<?php }?>


	<!-- Bootstrap -->
	<?php if (!empty($_smarty_tpl->tpl_vars['bootstrap']->value)) {?>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['bootstrap']->value;?>
">
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['csspage']->value)) {?>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['csspage']->value;?>
">
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['cssnavbar']->value)) {?>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cssnavbar']->value;?>
">
	<?php }?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body><?php }} ?>
