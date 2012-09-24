<!DOCTYPE HTML>
<!--[if lt IE 7 ]><html class="ie6" lang="zh-CN"> <![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="zh-CN"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="zh-CN"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="zh-CN"> <!--<![endif]-->
<head>
	<meta content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
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
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome-ie7.css">
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/sea.js" data-main="<?php bloginfo('template_url'); ?>/js/init"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/plugins/html5shiv.js"></script>
	<![endif]-->
	<meta property="wb:webmaster" content="7dbe0bef4c8f21ac" />
	<?php wp_head(); ?>
</head>
<body id="blog" <?php body_class(); ?>>
<div id="wrap">
	<header>
		<div id="ihd" class="container_12 clearfix">
			<div id="logo" class="grid_2">
				<h1><a href="<?php echo get_settings('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
			<div class="slogan grid_10">
				<a href="javascript:void(0);" class="active-nav"><i class="icon-circle-arrow-down"></i></a>
				<a href="http://handybbs.com/category/qa/" class="help" title="help?"><i class="icon-question-sign"></i></a>
			</div>
		</div>
	</header>
	<nav class="hot-board-wrap">
		<div class="board-nav container_12 clearfix">
			<div class="share grid_2">
				<div class="s1">
					<i class="icon-cloud"></i>
					<span class="desc">Share ideas on clouds</span>
				</div>
			</div>
			<div class="nav-cnt grid_10">
				<div class="nav-bar clearfix">
					<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
				</div>
			</div>
		</div>
	</nav>
	<div class="banner clearfix">
		<div class="inner container_12 clearfix">
			<div class="grid_9">
				<h2 class="title"><?php bloginfo('description'); ?></h2>
				<div class="desc">
					为你的博客提供社会化论坛体验，从未如此简单。
				</div>
				<div class="wb-share">
					<script type="text/javascript" charset="utf-8">
					(function(){
					  var _w = 106 , _h = 32;
					  var param = {
					    url:location.href,
					    type:'5',
					    count:'0', /**是否显示分享数，1显示(可选)*/
					    appkey:'3247439270', /**您申请的应用appkey,显示分享来源(可选)*/
					    title:'<?php bloginfo('description'); ?> - handybbs为你的博客提供社会化论坛体验，从未如此简单。', /**分享的文字内容(可选，默认为所在页面的title)*/
					    pic:'', /**分享图片的路径(可选)*/
					    ralateUid:'1644105187', /**关联用户的UID，分享微博会@该用户(可选)*/
						language:'zh_cn', /**设置语言，zh_cn|zh_tw(可选)*/
					    rnd:new Date().valueOf()
					  }
					  var temp = [];
					  for( var p in param ){
					    temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
					  }
					  document.write('<iframe allowTransparency="true" frameborder="0" scrolling="no" src="http://hits.sinajs.cn/A1/weiboshare.html?' + temp.join('&') + '" width="'+ _w+'" height="'+_h+'"></iframe>')
					})()
					</script>
				</div>
			</div>
			<div class="grid_3 dl-links">
				<a href="#" class="download wp-theme">WordPress 主题 <span>启用主题即刻享受论坛体验</span></a>
				<a href="#" class="ver-node">Nodejs 程序 <span>支持单点登录的完全版handy</span></a>
			</div>
		</div>
	</div>
	<article id="cnt">
		<div id="icnt" class="container_12 clearfix">