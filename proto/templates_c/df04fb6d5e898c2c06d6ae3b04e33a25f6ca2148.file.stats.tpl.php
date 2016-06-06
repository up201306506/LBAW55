<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 02:10:30
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28874142657546ec1bd32a2-04565161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df04fb6d5e898c2c06d6ae3b04e33a25f6ca2148' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/professor/stats/stats.tpl',
      1 => 1465171829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28874142657546ec1bd32a2-04565161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57546ec1cbc5d9_10164738',
  'variables' => 
  array (
    'classes' => 0,
    'class' => 0,
    'exams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57546ec1cbc5d9_10164738')) {function content_57546ec1cbc5d9_10164738($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Statistics</h1>
	<div class="box">
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
			<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['exams']->value[$_smarty_tpl->tpl_vars['class']->value['classid']]['examid']) {?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['exams']->value[$_smarty_tpl->tpl_vars['class']->value['classid']]['examidentification'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['exams']->value[$_smarty_tpl->tpl_vars['class']->value['classid']]['min_grade'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['exams']->value[$_smarty_tpl->tpl_vars['class']->value['classid']]['max_grade'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['exams']->value[$_smarty_tpl->tpl_vars['class']->value['classid']]['average'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['exams']->value[$_smarty_tpl->tpl_vars['class']->value['classid']]['approved_percentage'];?>
</td>
				</tr>
				<?php }?>
			<?php } ?>
			</tbody>
		</table>
		<div id="export-choice">
			<label id="main-label" for="export">Export as:</label>
			<div class="form-group radio-group">
				<label class="radio-inline">
					<input type="radio" name="filetype" value="xml" checked="checked" />XML
				</label>
				<label class="radio-inline">
					<input type="radio" name="filetype" value="csv"/>CSV
				</label>
			</div>
			<button id="export" type="button" class="btn btn-primary">Export</button>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
