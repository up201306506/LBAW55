{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

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

{include file='javascript_plugins/jquery.tpl'}
{include file='javascript_plugins/script.tpl'}
{include file='javascript_plugins/bootstrap.tpl'}
{include file='common/footer.tpl'}