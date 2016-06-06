<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 16:26:14
         compiled from "D:\Programs\wamp\www\LBAW55\proto\templates\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152557543686221923-16590683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f65635c6975f35093f41d85904f479e00fec1432' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\proto\\templates\\common\\header.tpl',
      1 => 1465051644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152557543686221923-16590683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagename' => 0,
    'jquery' => 0,
    'bootstrap' => 0,
    'csspage' => 0,
    'cssnavbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57543686357568_59758672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57543686357568_59758672')) {function content_57543686357568_59758672($_smarty_tpl) {?><!DOCTYPE html>
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
