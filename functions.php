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
		'before_widget' => '<div class="side-cnt">', // widget 的开始标签
		'after_widget' => '</div>', // widget 的结束标签
		'before_title' => '<h3 class="side-title">', // 标题的开始标签
		'after_title' => '</h3>' // 标题的结束标签
	));
}
//add_action('register_form', 'register_message');
//    function register_message() {
//        $html = '
//            <div style="margin:10px 0;border:1px solid #e5e5e5;padding:10px">
//                <p style="margin:5px 0;">
//            Joining this site you agree to the following terms. Do no harm!
//            </p>
//            </div>';
//        echo $html;
//    }
//?>