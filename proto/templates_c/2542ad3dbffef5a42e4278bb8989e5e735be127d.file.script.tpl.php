<?php /* Smarty version Smarty-3.1.15, created on 2016-05-20 11:27:09
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/javascript_plugins/script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123410518573ed86de7a6c9-85665775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2542ad3dbffef5a42e4278bb8989e5e735be127d' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/javascript_plugins/script.tpl',
      1 => 1463736404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123410518573ed86de7a6c9-85665775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573ed86de8e9f6_03648858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573ed86de8e9f6_03648858')) {function content_573ed86de8e9f6_03648858($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['script']->value)) {?>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"></script>
<?php }?><?php }} ?>
