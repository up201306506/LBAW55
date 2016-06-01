<?php /* Smarty version Smarty-3.1.15, created on 2016-05-31 02:31:18
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/public/find_classes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603227613574ca77a6dc042-37244728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '751eca1e97e58d552e564694a0bde031a93901eb' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/public/find_classes.tpl',
      1 => 1464654670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603227613574ca77a6dc042-37244728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574ca77a78f637_20704100',
  'variables' => 
  array (
    'size' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ca77a78f637_20704100')) {function content_574ca77a78f637_20704100($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
			<h1>List of All Classes</h1>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Manager</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
					
					</tbody>
				</table>
				<span><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</span>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
