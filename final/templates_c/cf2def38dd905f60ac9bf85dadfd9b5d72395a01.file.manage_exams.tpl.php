<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 01:58:13
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/manage_exams.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5195576925751b141b89f95-24510131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf2def38dd905f60ac9bf85dadfd9b5d72395a01' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/manage_exams.tpl',
      1 => 1465084638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5195576925751b141b89f95-24510131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5751b141cac372_65363881',
  'variables' => 
  array (
    'examlist' => 0,
    'exam' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751b141cac372_65363881')) {function content_5751b141cac372_65363881($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Manage Exams</h1>
	<div class="box">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Exam</th>
					<th>Date</th>
					<th>Local</th>
					<th>Accessibility</th>
					<th>State</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="exams">
			<?php if (!$_smarty_tpl->tpl_vars['examlist']->value) {?>
				<tr>
					<td>No exams were found in the database.</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			<?php } else { ?>
				<?php  $_smarty_tpl->tpl_vars['exam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exam']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['examlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exam']->key => $_smarty_tpl->tpl_vars['exam']->value) {
$_smarty_tpl->tpl_vars['exam']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['exam']->value['examidentification'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['exam']->value['date'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['exam']->value['local'];?>
</td>
						<td><?php if ($_smarty_tpl->tpl_vars['exam']->value['password']=='') {?>Public<?php } else { ?>Private<?php }?></td>
						<td><?php if ($_smarty_tpl->tpl_vars['exam']->value['exampublished']) {?>Published<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['exam']->value['isongoing']) {?>Being Solved<?php } else { ?>Not Visible<?php }?><?php }?></td>
						<td>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
admin/edit_exam.php?id=<?php echo $_smarty_tpl->tpl_vars['exam']->value['examid'];?>
">Edit</a>
						</td>
					</tr>
				<?php } ?>
			<?php }?>
			</tbody>
		</table>
		<nav id="center">
			<ul class="pagination">
			</ul>
		</nav>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
