<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 03:17:06
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/statistics/statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6660522215750da92ea3c71-53489781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5bbb1164abcf2c7f8f71248326dc8beabd528bf' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/statistics/statistics.tpl',
      1 => 1464854003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6660522215750da92ea3c71-53489781',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5750da93034f61_55900670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750da93034f61_55900670')) {function content_5750da93034f61_55900670($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Statistics</h1>
	<div class="box">
		<h3></h3>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Exam</th>
					<th>Minimum</th>
					<th>Maximum</th>
					<th>Average</th>
					<th>Approved Percentage</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
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

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
