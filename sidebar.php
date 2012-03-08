<div id="sidebar" class="grid_3">
	<div id="isidebar">			
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> 
		<h4 class="sidebar-title">目录</h4> 
		<ul> 
			<?php wp_list_categories('title_li=&depth=1'); ?> 
		</ul> 
		<h4 class="sidebar-title">存档</h4> 
		<ul> 
			<?php wp_get_archives(); ?> 
		</ul>
		<?php endif; ?> 			
	</div>
</div>