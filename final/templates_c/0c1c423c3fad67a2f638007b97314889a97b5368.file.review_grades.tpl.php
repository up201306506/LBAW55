<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 08:28:52
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/public/review_grades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:649977389574fe7cac402b4-75396723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c1c423c3fad67a2f638007b97314889a97b5368' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/public/review_grades.tpl',
      1 => 1465194528,
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
    'exams' => 0,
    'exam' => 0,
    'grades' => 0,
    'students' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574fe7cad36d72_59441891')) {function content_574fe7cad36d72_59441891($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
			<h1>Review Grades</h1>
		<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='Student') {?>
			<div class="box">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['exam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exam']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exam']->key => $_smarty_tpl->tpl_vars['exam']->value) {
$_smarty_tpl->tpl_vars['exam']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['exam']->value['examidentification'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['exam']->value['date'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['grades']->value[$_smarty_tpl->tpl_vars['exam']->value['examid']]['finalgrade']) {?>
							<td><?php echo $_smarty_tpl->tpl_vars['grades']->value[$_smarty_tpl->tpl_vars['exam']->value['examid']]['finalgrade'];?>
</td>
						<?php } else { ?>
							<td>Not Yet Published</td>
						<?php }?>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		<?php } else { ?>
			<?php  $_smarty_tpl->tpl_vars['exam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exam']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exam']->key => $_smarty_tpl->tpl_vars['exam']->value) {
$_smarty_tpl->tpl_vars['exam']->_loop = true;
?>
			<div class="box">
				<h3><?php echo $_smarty_tpl->tpl_vars['exam']->value['examidentification'];?>
</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['grades']->value[$_smarty_tpl->tpl_vars['student']->value['userid']]['finalgrade'];?>
</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<?php } ?>
		<?php }?>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
