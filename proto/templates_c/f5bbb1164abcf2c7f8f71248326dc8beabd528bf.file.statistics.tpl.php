<?php /* Smarty version Smarty-3.1.15, created on 2016-05-30 23:59:59
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/statistics/statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:898454412574cb7df2bf723-04259000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5bbb1164abcf2c7f8f71248326dc8beabd528bf' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/statistics/statistics.tpl',
      1 => 1464645317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '898454412574cb7df2bf723-04259000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574cb7df380790_41162271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cb7df380790_41162271')) {function content_574cb7df380790_41162271($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-12 col-lg-offset-1 col-md-offset-1">
			<h1>Statistics</h1>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Minimum</th>
							<th>Maximum</th>
							<th>Average</th>
							<th>Approved Percentage</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
			<div id="export-choice">
				<label id="main-label" for="export">Export as:</label>
				<div id="export" class="form-group radio-group">
					<label class="radio-inline">
						<input type="radio" name="file-type" value="pdf" checked/>PDF
					</label>
					<label class="radio-inline">
						<input type="radio" name="file-type" value="xml" />XML
					</label>
					<label class="radio-inline">
						<input type="radio" name="file-type" value="csv" />CSV
					</label>
				</div>
				<button id="export-button" class="btn btn-primary">Export</button>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
