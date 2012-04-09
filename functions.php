<?php
// signup menus
register_nav_menus(array('primary' => '顶部导航'));
// add thumbnails
//if ( function_exists( 'add_theme_support' ) ) {
//	add_theme_support( 'post-thumbnails' );
//	set_post_thumbnail_size( 83, 9999 );
//};
//if ( function_exists( 'add_image_size' ) ) { 
//	add_image_size( 'home-img', 81, 9999 );
//	add_image_size( 'single-img', 250, 9999 );
//};
// signup sidebar
if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div class="sdb-cnt">', // widget 的开始标签
		'after_widget' => '</div>', // widget 的结束标签
		'before_title' => '<h3 class="sbd-title">', // 标题的开始标签
		'after_title' => '</h3>' // 标题的结束标签
	));
}
?>