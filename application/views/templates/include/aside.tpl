<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
			<!--template-->
			{*{foreach $list as $saide_list}*}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-edit"></i><span>{#title#}</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
					<li><a href=""><i class="fa fa-circle-o"></i>General Elements</a></li>
					<li><a href=""><i class="fa fa-circle-o"></i>Advanced Elements</a></li>
					<li><a href=""><i class="fa fa-circle-o"></i>Editors</a></li>
				</ul>
			</li>
			{*{/foreach}*}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-edit"></i><span>{$smarty.config.aside_list[0].title}</span>
					<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
				</a>
				<ul class="treeview-menu">
					<li><a href=""><i class="fa fa-circle-o"></i></a></li>
					<li><a href=""><i class="fa fa-circle-o"></i>Advanced Elements</a></li>
					<li><a href=""><i class="fa fa-circle-o"></i>Editors</a></li>
				</ul>
			</li>
		</ul>
	</section>
</aside>
