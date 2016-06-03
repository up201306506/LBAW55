<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 03:10:56
         compiled from "/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10785121515750d9209bec38-22710111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8982650bc80203abcd203400df2ce8f07fb17458' => 
    array (
      0 => '/Applications/MAMP/htdocs/LBAW55/proto/templates/profile/calendar.tpl',
      1 => 1464821764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10785121515750d9209bec38-22710111',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5750d920ade3c1_28277611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750d920ade3c1_28277611')) {function content_5750d920ade3c1_28277611($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<h1>Calendar</h1>
	<div id="calendar" class="box">
		<ul id="month">
			<li><button class="btn btn-default"><span class="glyphicon glyphicon-triangle-left"></span></button></li>
			<li><h3>Month</h3></li>
			<li><button class="btn btn-default"><span class="glyphicon glyphicon-triangle-right"></span></button></li>
		</ul>
		<ul id="weekdays-lg">
			<li>Monday</li>
			<li>Tuesday</li>
			<li>Wednesday</li>
			<li>Thursday</li>
			<li>Friday</li>
			<li>Saturday</li>
			<li>Sunday</li>
		</ul>
		<ul id="weekdays-sm">
			<li><abbr title="Monday">Mon</abbr></li>
			<li><abbr title="Tuesday">Tue</abbr></li>
			<li><abbr title="Wednesday">Wed</abbr></li>
			<li><abbr title="Thursday">Thu</abbr></li>
			<li><abbr title="Friday">Fri</abbr></li>
			<li><abbr title="Saturday">Sat</abbr></li>
			<li><abbr title="Sunday">Sun</abbr></li>
		</ul>
		<ul id="weeks">
			<ul id="days">
				
			</ul>
			<ul id="days">
				
			</ul>
			<ul id="days">
				
			</ul>
			<ul id="days">
				
			</ul>
			<ul id="days">
				
			</ul>
		</ul>
	</div>
	<div id="content">
		<div class="box">
			<h2>Schedule for DD/MM/YYYY</h2>
			<ul>
				<li>There are no events for today</li>
			</ul>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/jquery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('javascript_plugins/bootstrap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
