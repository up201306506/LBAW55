<?php /* Smarty version Smarty-3.1.15, created on 2016-06-02 23:34:35
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/manage_database.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5006431815750a66b946564-27505690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bb59bb9449731a561663770fe7515e41e1a7243' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/admin/manage_database.tpl',
      1 => 1464877226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5006431815750a66b946564-27505690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userlist' => 0,
    'user' => 0,
    'user_pages_needed' => 0,
    'c' => 0,
    'examlist' => 0,
    'exam' => 0,
    'exam_owners' => 0,
    'categorylist' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5750a66bc97db4_59837694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750a66bc97db4_59837694')) {function content_5750a66bc97db4_59837694($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 col-sm-12 col-lg-offset-2 col-md-offset-1">
			<ul id="links">
				<li><a href="#users">Users</a></li>
				<li><a href="#exams">Exams</a></li>
				<li><a href="#questions">Questions</a></li>
			</ul>
		</div>
		<div id="users" class="col-lg-12 col-md-12 col-sm-12">
			<h3>Users</h3>
			<div class="box">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search User"></input>
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Account Type</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php if (!$_smarty_tpl->tpl_vars['userlist']->value) {?>
						<tr>
							<td>The loneliest website ever! You're all alone here, admin.</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					<?php } else { ?>
						<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['user']->value['accountvartype'];?>
</td>
								<td>
									<button class="btn btn-danger">Ban</button>
								</td>
							</tr>
						<?php } ?>
					<?php }?>
					</tbody>
				</table>
				<div id="center">
				<?php if ($_smarty_tpl->tpl_vars['userlist']->value!='') {?>
					<ul class="pagination">
					<?php $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['c']->step = 1;$_smarty_tpl->tpl_vars['c']->total = (int) ceil(($_smarty_tpl->tpl_vars['c']->step > 0 ? $_smarty_tpl->tpl_vars['user_pages_needed']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['user_pages_needed']->value)+1)/abs($_smarty_tpl->tpl_vars['c']->step));
if ($_smarty_tpl->tpl_vars['c']->total > 0) {
for ($_smarty_tpl->tpl_vars['c']->value = 1, $_smarty_tpl->tpl_vars['c']->iteration = 1;$_smarty_tpl->tpl_vars['c']->iteration <= $_smarty_tpl->tpl_vars['c']->total;$_smarty_tpl->tpl_vars['c']->value += $_smarty_tpl->tpl_vars['c']->step, $_smarty_tpl->tpl_vars['c']->iteration++) {
$_smarty_tpl->tpl_vars['c']->first = $_smarty_tpl->tpl_vars['c']->iteration == 1;$_smarty_tpl->tpl_vars['c']->last = $_smarty_tpl->tpl_vars['c']->iteration == $_smarty_tpl->tpl_vars['c']->total;?>
						<li <?php if ($_smarty_tpl->tpl_vars['c']->value==1) {?>class="active"<?php }?>><a href="#"><?php echo $_smarty_tpl->tpl_vars['c']->value;?>
</a></li>
					<?php }} ?>
					</ul>
				<?php }?>
				</div>
			</div>
		</div>
		<div id="exams" class="col-lg-12 col-md-12 col-sm-12">
			<h3>Exams</h3>
			<div class="box">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4">
						<div class="form-group">
							<label for="class">Class</label>
							<select id="class" class="form-control">
								<option>Class #1</option>
								<option>Class #2</option>
								<option>Class #3</option>
								<option>Class #4</option>
							</select>
						</div>
					</div>
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Manager</th>
							<th>Accessibility</th>
							<th>State</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
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
								<td><?php echo $_smarty_tpl->tpl_vars['exam_owners']->value[$_smarty_tpl->tpl_vars['exam']->value['examid']];?>
</td>
								<td><?php if ($_smarty_tpl->tpl_vars['exam']->value['password']=='') {?>OPEN<?php } else { ?>PRIVATE<?php }?></td>
								<td><?php if ($_smarty_tpl->tpl_vars['exam']->value['exampublished']) {?>Published<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['exam']->value['isongoing']) {?>Being Solved<?php } else { ?>Not Visible<?php }?><?php }?></td>
								<td>
									<button class="btn btn-danger">Ban</button>
								</td>
							</tr>
						<?php } ?>
					<?php }?>
					</tbody>
				</table>
				<div id="center">
					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="questions" class="col-lg-12 col-md-12 col-sm-12">
			<h3>Questions</h3>
			<div class="box">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4">
						<div class="form-group">
							<label for="category">Category</label>
							<select id="category" class="form-control">
							<?php if (!$_smarty_tpl->tpl_vars['categorylist']->value) {?>
								<option value=''>No categories...</option>
							<?php } else { ?>
							<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
								<option value='<?php echo $_smarty_tpl->tpl_vars['category']->value['categoryid'];?>
'><?php echo $_smarty_tpl->tpl_vars['category']->value['type'];?>
</option>
							<?php } ?>
							<?php }?>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="question">Search by question:</label>
							<textarea id="question" class="form-control" rows="5"></textarea>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
							<label for="answer">Search by answer:</label>
							<textarea id="answer" class="form-control" rows="5"></textarea>
						</div>
					</div>
				</div>
				<div class="input-group question">
					<div class="my-panel">
						<div class="my-panel-header">
							<span></span>
						</div>
						<div class="my-panel-body">
							<ul id="answers">
								<li><span></span></li>
								<li><span></span></li>
								<li><span></span></li>
								<li><span></span></li>
							</ul>
						</div>
					</div>
					<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
				</div>
				<div id="center">
					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
