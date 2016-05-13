<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 10:39:00
         compiled from "D:\Programs\wamp\www\LBAW55\dev\templates\javascript_plugins\tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:514573592a47730e0-25270574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20ca1ffcfe98090fb1be628aa145f69dc1cf1cea' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\dev\\templates\\javascript_plugins\\tabs.tpl',
      1 => 1462982182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '514573592a47730e0-25270574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'script_tabs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573592a478ba69_87166276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573592a478ba69_87166276')) {function content_573592a478ba69_87166276($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['script_tabs']->value)) {?>
    <!-- Include file to make tabs work -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['script_tabs']->value;?>
"></script>
<?php }?><?php }} ?>
