<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php
	// 如果是首页和文章列表页面, 显示博客标题
	if(is_front_page() || is_home()) { 
		bloginfo('name');
 
	// 如果是文章详细页面和独立页面, 显示文章标题
	} else if(is_single() || is_page()) {
		wp_title('');
 
	// 如果是类目页面, 显示类目表述
	} else if(is_category()) {
		printf('%1$s 类目的文章存档', single_cat_title('', false));
 
	// 如果是搜索页面, 显示搜索表述
	} else if(is_search()) {
		printf('%1$s 的搜索结果', wp_specialchars($s, 1));
 
	// 如果是标签页面, 显示标签表述
	} else if(is_tag()) {
		printf('%1$s 标签的文章存档', single_tag_title('', false));
 
	// 如果是日期页面, 显示日期范围描述
	} else if(is_date()) {
		$title = '';
		if(is_day()) {
			$title = get_the_time('Y年n月j日');
		} else if(is_year()) {
			$title = get_the_time('Y年');
		} else {
			$title = get_the_time('Y年n月');
		}
		printf('%1$s的文章存档', $title);
 
	// 其他页面显示博客标题
	} else {
		bloginfo('name');
	}
?></title>
<meta name="author" content="GuoYu" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<?php wp_head(); ?>
</head>
<body id="blog" <?php body_class(); ?>>
<div id="wrap">
	<div id="hd">
		<div id="ihd" class="container_12 clearfix">
			<div id="logo">
				<h1><a href="<?php echo get_settings('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
		</div>
	</div>
	<div id="nav">
		<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
	</div>		
	<div id="cnt">
		<div id="icnt" class="container_12 clearfix">