<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>404 没有找到您请求的页面</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="author" content="GuoYu" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/favicon.png" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/paper.js"></script>
<?php wp_head(); ?>
</head>

<body id="not-found">
<div id="wrap">
	<div id="header" class="clearfix">
		<div id="logo" class="floatl"><h1><a href="http://guoyu.me" title="GuoYu" class="logo">GuoYu</a></h1></div>
		<div class="des floatl"><p>Web Designer &amp; UX/Interaction Designer</p></div>
		<ul id="menu" class="floatr">
			<li><a href="http://guoyu.me">首页</a>Home</li>
			<li><a href="http://guoyu.me/about">关于</a>About</li>
			<li><a href="http://guoyu.me/work">作品</a>Work</li>
			<li class="cur"><a href="<?php echo get_settings('home'); ?>/">博客</a>Blog</li>
		</ul>
	</div><!-- end #header -->
		<div id="content">
			<div id="section" class="container_12">
				<div id="isection">
				<h2 class="ts1d not-found-title">It seems you've get the wrong way <span><a href="<?php echo get_settings('home'); ?>/">Take me home</a></span></h2>
				</div>
			</div>
		</div>
<div id="footer">&copy; 2009-2011 GuoYu.me 版权所有
<?php wp_footer(); ?>
</div>
<canvas id="canvas" resize class="nf-canvas"></canvas>
<div id="bgr"></div>
<script type="text/javascript"> 
	$.backstretch("<?php bloginfo('template_url'); ?>/images/sea.jpg", {speed: 150});
</script>
<script type="text/javascript">
$(document).ready(function() {
	//LOGO
	$('.logo').wrapInner('<span class="hover"></span>').css('textIndent','0')
		.each(function () {
		$('span.hover').css('opacity', 0).hover(function () {
			$(this).stop().fadeTo(650, 1);
		}, function () {
			$(this).stop().fadeTo(650, 0);
		});
	});
});
</script>
<script type="text/paperscript" canvas="canvas">
	// The amount of symbol we want to place;
	var count = 50;

	// Create a symbol, which we will use to place instances of later:
	var path = new Path.Circle(new Point(0, 0), 5);
	path.style = {
		fillColor: 'white',
		strokeColor: 'white'
	};

	var symbol = new Symbol(path);

	// Place the instances of the symbol:
	for (var i = 0; i < count; i++) {
		// The center position is a random point in the view:
		var center = Point.random() * view.size;
		var placed = symbol.place(center);
		placed.scale(i / count);
		placed.data = {};
		placed.data.vector = new Point({
			angle: Math.random() * 360,
			length : (i / count) * Math.random() / 5
		});
	}

	var vector = new Point({
		angle: 45,
		length: 0
	});

	var mouseVector = vector.clone();

	function onMouseMove(event) {
		mouseVector = view.center - event.point;
	}

	// The onFrame function is called up to 60 times a second:
	function onFrame(event) {
		vector = vector + (mouseVector - vector) / 60;

		// Run through the active layer's children list and change
		// the position of the placed symbols:
		for (var i = 0; i < count; i++) {
			var item = project.activeLayer.children[i];
			var size = item.bounds.size;
			var length = vector.length / 30 * size.width / 30;
			item.position += vector.normalize(length) + item.data.vector;
			keepInView(item);
		}
	}

	function keepInView(item) {
		var position = item.position;
		var itemBounds = item.bounds;
		var bounds = view.bounds;
		if (itemBounds.left > bounds.width) {
			position.x = -item.bounds.width;
		}

		if (position.x < -itemBounds.width) {
			position.x = bounds.width + itemBounds.width;
		}

		if (itemBounds.top > view.size.height) {
			position.y = -itemBounds.height;
		}

		if (position.y < -itemBounds.height) {
			position.y = bounds.height  + itemBounds.height / 2;
		}
	}
	</script>
</body>
</html>