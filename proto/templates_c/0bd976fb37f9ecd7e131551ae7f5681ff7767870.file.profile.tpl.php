<?php /* Smarty version Smarty-3.1.15, created on 2016-05-27 16:06:08
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:346403140573ed52287fa37-14355705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bd976fb37f9ecd7e131551ae7f5681ff7767870' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/profile.tpl',
      1 => 1464357908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346403140573ed52287fa37-14355705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573ed522e5c2a2_65592306',
  'variables' => 
  array (
    'session_username' => 0,
    'session_name' => 0,
    'session_email' => 0,
    'description' => 0,
    'usertype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573ed522e5c2a2_65592306')) {function content_573ed522e5c2a2_65592306($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">
	<h1>Profile</h1>
	<div class="row">
		<div id="user-info" class="col-sm-3">
			<div class="well">
				<img id="user-img" class="img-circle img-responsive" src="../css/res/user_img.png" width="200" height="200">
				<div id="username">
					<span class="glyphicon glyphicon-credit-card"></span>
					<span> <?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
</span>
				</div>
				<div id="name">
					<span class="glyphicon glyphicon-user"></span>
					<span> <?php echo $_smarty_tpl->tpl_vars['session_name']->value;?>
</span>
				</div>
				<div id="email">
					<span class="glyphicon glyphicon-envelope"></span>
					<span> <?php echo $_smarty_tpl->tpl_vars['session_email']->value;?>
</span>
				</div>
			</div>
			<div class="well">
				<h3>Description</h3>
				<span><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</span>
			</div>
		</div> <!-- col-sm-3 -->
		<div id="user-class-exam" class="col-sm-6">
			<div class="well">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Date</th>
							<th>Accessibility</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
			<div class="well">
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
		</div> <!-- col-sm-6 -->
		<div id="user-options" class="col-sm-3">
			<div class="well">
				<h5>ONGOING</h5>
				<span> - Nothing to report</span>
				<h5>COMING SOON</h5>
				<span> - Nothing to report</span>
			</div>
			<div id="calendar" class="well">
				<ul id="month">
					<li><a href="#"><span class="glyphicon glyphicon-triangle-left"></span></a></li>
					<li><a href="#">Month</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span></a></li>
				</ul>
				<ul id="weekdays">
					<li><abbr title="Monday">Mon</abbr></li>
					<li><abbr title="Tuesday">Tue</abbr></li>
					<li><abbr title="Wednesday">Wed</abbr></li>
					<li><abbr title="Thursday">Thu</abbr></li>
					<li><abbr title="Friday">Fri</abbr></li>
					<li><abbr title="Saturday">Sat</abbr></li>
					<li><abbr title="Sunday">Sun</abbr></li>
				</ul>
				<ul id="days">
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
					<li>7</li>
					<li>8</li>
					<li>9</li>
					<li>10</li>
					<li>11</li>
					<li>12</li>
					<li>13</li>
					<li>14</li>
					<li>15</li>
					<li>16</li>
					<li>17</li>
					<li>18</li>
					<li>19</li>
					<li>20</li>
					<li>21</li>
					<li>22</li>
					<li>23</li>
					<li>24</li>
					<li>25</li>
					<li>26</li>
					<li>27</li>
					<li>28</li>
					<li>29</li>
					<li>30</li>
					<li>31</li>
				</ul>
			</div>
			<div class="well">
				<ul id="options">
					<span><?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
</span>
					<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='Administrator') {?>
						<li><a href="../admin/validate_accounts.php"><span class="glyphicon glyphicon-education"></span>Verify Teachers</a></li>
						<li><a href="../admin/manage_accounts.php"><span class="glyphicon glyphicon-education"></span>Manage Users</a></li>
					<?php } elseif ($_smarty_tpl->tpl_vars['usertype']->value=='Professor') {?>
						<li><a href="../professor/class/create_class.php"><span class="glyphicon glyphicon-education"></span>Create Class</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-file"></span>Create Exam</a></li>
						<li><a href="../professor/question/create_question.php"><span class="glyphicon glyphicon-pencil"></span>Create Question</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-stats"></span>Statistics</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Review Grades</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					<?php } else { ?>
						<li><a href="#"><span class="glyphicon glyphicon-search"></span>Find Classes</a></li>
					<?php }?>
				</ul>
			</div>
			
		</div> <!-- col-sm-3 -->
	</div>
</div> <!-- wrapper -->

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/wrapper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
