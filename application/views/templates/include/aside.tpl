<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
			<!--template-->
			{nocache}

				{foreach $data.aside as $data}
					<li class="treeview">
						<a href="">
							<i class="fa fa-{$data.icon}"></i>
							<span>{$data.title}</span>
							{if $data.dropdown_list!=null}
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
							{/if}
						</a>
						<ul class="treeview-menu">
							{foreach $data.dropdown_list as $list}
								<li><a href=""><i class="fa fa-circle-o"></i>{$list.title}</a></li>
							{/foreach}
						</ul>
					</li>
				{/foreach}
			{/nocache}
		</ul>
	</section>
</aside>
