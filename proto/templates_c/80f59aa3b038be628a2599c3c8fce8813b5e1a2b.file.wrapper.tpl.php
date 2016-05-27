<?php /* Smarty version Smarty-3.1.15, created on 2016-05-27 16:06:08
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/javascript_plugins/wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203874722257485450ce0404-81032710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80f59aa3b038be628a2599c3c8fce8813b5e1a2b' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/javascript_plugins/wrapper.tpl',
      1 => 1464333360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203874722257485450ce0404-81032710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wrapper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57485450cf3748_61636688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57485450cf3748_61636688')) {function content_57485450cf3748_61636688($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['wrapper']->value)) {?>
	<!-- Necessary for the wrapper to work (must come before any other script) -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['wrapper']->value;?>
"></script>
<?php }?><?php }} ?>
