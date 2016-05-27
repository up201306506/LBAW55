<?php /* Smarty version Smarty-3.1.15, created on 2016-05-20 11:12:24
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/javascript_plugins/tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:936012279573ed4f8203418-03539680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d9ec1be61cb0bd02045dc008a9c5410ce18c7d' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/javascript_plugins/tabs.tpl',
      1 => 1463728703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '936012279573ed4f8203418-03539680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'script_tabs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573ed4f82192d3_28312535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573ed4f82192d3_28312535')) {function content_573ed4f82192d3_28312535($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['script_tabs']->value)) {?>
    <!-- Include file to make tabs work -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['script_tabs']->value;?>
"></script>
<?php }?><?php }} ?>
