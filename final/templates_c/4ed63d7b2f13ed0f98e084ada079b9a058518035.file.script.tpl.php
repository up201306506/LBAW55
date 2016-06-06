<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 16:26:16
         compiled from "D:\Programs\wamp\www\LBAW55\proto\templates\javascript_plugins\script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18922575436885cd9c1-35244506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ed63d7b2f13ed0f98e084ada079b9a058518035' => 
    array (
      0 => 'D:\\Programs\\wamp\\www\\LBAW55\\proto\\templates\\javascript_plugins\\script.tpl',
      1 => 1464854461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18922575436885cd9c1-35244506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575436885dca43_55266577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575436885dca43_55266577')) {function content_575436885dca43_55266577($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['script']->value)) {?>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"></script>
<?php }?><?php }} ?>
