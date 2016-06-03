<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 11:12:31
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/public/review_grades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:649977389574fe7cac402b4-75396723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c1c423c3fad67a2f638007b97314889a97b5368' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/public/review_grades.tpl',
      1 => 1464945052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '649977389574fe7cac402b4-75396723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574fe7cad36d72_59441891',
  'variables' => 
  array (
    'usertype' => 0,
    'classes' => 0,
    'class' => 0,
    'exams' => 0,
    'exam' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fe7cad36d72_59441891')) {function content_574fe7cad36d72_59441891($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='Student') {?>
<style type="text/css">
	.table {
		margin-bottom: 0;
	}
</style>
<?php }?>

<div class="container">
	<h1>Review Grades</h1>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
		<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
?>
			<div class="box">
				<h3><?php echo $_smarty_tpl->tpl_vars['class']->value['classname'];?>
</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
						<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='Student') {?>
							<th>Final Grade</th>
						<?php } else { ?>
							<th>Average Grade</th>
						<?php }?>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['exam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exam']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exams']->value[$_smarty_tpl->tpl_vars['class']->value['classname']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exam']->key => $_smarty_tpl->tpl_vars['exam']->value) {
$_smarty_tpl->tpl_vars['exam']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['exam']->value['examidentification'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['exam']->value['date'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
</td>
							<td>chumbaste</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='Professor') {?>
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
			<?php }?>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
