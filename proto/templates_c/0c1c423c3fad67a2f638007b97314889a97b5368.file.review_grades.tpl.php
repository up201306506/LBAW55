<?php /* Smarty version Smarty-3.1.15, created on 2016-05-30 23:49:25
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/public/review_grades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1257852307574cb3079819b5-10919162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c1c423c3fad67a2f638007b97314889a97b5368' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/public/review_grades.tpl',
      1 => 1464644963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1257852307574cb3079819b5-10919162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574cb307a1e7d3_24252151',
  'variables' => 
  array (
    'usertype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cb307a1e7d3_24252151')) {function content_574cb307a1e7d3_24252151($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
			<div class="box">
				<h3>Class #1</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
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
			<div class="box">
				<h3>Class #2</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
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
			<div class="box">
				<h3>Class #3</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
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
			<div class="box">
				<h3>Class #4</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
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
			<div class="box">
				<h3>Class #5</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Graded By</th>
							<th>Final Grade</th>
						</tr>
					</thead>
					<tbody>
						
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
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
