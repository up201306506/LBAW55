<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 10:38:55
         compiled from "D:\Programs\wamp\www\LBAW55\dev\templates\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231595735929f3f1025-78529577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d65270e0d020643de1fb3407c3048be59ea7a2b' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\dev\\templates\\common\\header.tpl',
      1 => 1462982238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231595735929f3f1025-78529577',
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
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5735929f44c4f2_78025977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5735929f44c4f2_78025977')) {function content_5735929f44c4f2_78025977($_smarty_tpl) {?><!DOCTYPE html>
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
<body>
	<!-- need login confirmation like in frmk -->
	 <div id="error_messages">
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
	  <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
	<?php } ?>
	</div>
	<div id="success_messages">
	<?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
	  <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
	<?php } ?>
	</div>

<?php }} ?>
