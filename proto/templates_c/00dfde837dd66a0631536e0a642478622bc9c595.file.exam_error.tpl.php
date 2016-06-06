<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 09:06:57
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/student/exam/exam_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115858615557552111371c69-24835378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00dfde837dd66a0631536e0a642478622bc9c595' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/student/exam/exam_error.tpl',
      1 => 1465196661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115858615557552111371c69-24835378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5755211146b633_13741305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5755211146b633_13741305')) {function content_5755211146b633_13741305($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-md-offset-2">
			<div class="alert alert-danger" role="alert">
				<strong>Warning!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
