<?php /* Smarty version Smarty-3.1.15, created on 2016-05-27 23:39:54
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/public/search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15657205775748678356efe6-68460144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b6e3b5cd1674ba92da51561540c7da033ee9ee' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/public/search_results.tpl',
      1 => 1464385126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15657205775748678356efe6-68460144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57486783632cf3_97681239',
  'variables' => 
  array (
    'search_term' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57486783632cf3_97681239')) {function content_57486783632cf3_97681239($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">
	<h1>Search results for "<?php echo $_smarty_tpl->tpl_vars['search_term']->value;?>
"</h1>
	<div class="row">
		<div class="col-sm-5">
			<div class="well">
				<h3>Users</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Account Type</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="well">
				<h3>Classes</h3>
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
			</div>
		</div>
		<div class="col-sm-2">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Filters</div>
				<div class="panel-body">
					<span>Filter by:</span>
					<div class="checkbox">
						<label><input type="checkbox" />Professors</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" />Students</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" />Classes</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
