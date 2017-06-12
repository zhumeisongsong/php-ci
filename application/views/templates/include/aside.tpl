<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
			<!--template-->

			{foreach $data.aside as $list}
				<li class="treeview">
					<a href="javascript:;">
						<i class="fa fa-{$list.icon}"></i>
						<span>{$list.title}</span>
						{if $list.dropdown_list!=null}
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						{/if}
					</a>

					<ul class="treeview-menu">
						{foreach $list.dropdown_list as $second}
							<li><a href="{$data.base_url}{$second.path}"><i class="fa fa-circle-o"></i>{$second.title}</a></li>
						{/foreach}
					</ul>
				</li>
			{/foreach}
		</ul>
	</section>
</aside>
