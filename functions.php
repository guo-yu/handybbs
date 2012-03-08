<?php
// signup menus
register_nav_menus(array('primary' => '顶部导航'));
// register_nav_menus(array('menuname' => 'menudescription));
// signup sidebar
if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div class="isidebar">', // widget 的开始标签
		'after_widget' => '</div>', // widget 的结束标签
		'before_title' => '<h3>', // 标题的开始标签
		'after_title' => '</h3>' // 标题的结束标签
	));
}
?>