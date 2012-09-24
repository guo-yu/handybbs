<?php get_header(); ?>

<div class="main-board board index-board grid_12">
	
<?php if (have_posts()) : ?>

	<div class="archive-bread clearfix">
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="archive-title"><a href="<?php echo get_settings('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><i class="icon-chevron-right"></i><?php single_cat_title(); ?> <span class='cat-desc'><?php echo category_description(); ?></span></h2>
		<div class="archive-cat-des"></div>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="archive-title">标签为 <?php single_tag_title(); ?> 的所有文章</h2>
		<div class="archive-tag-des"><?php echo tag_description(); ?></div>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="archive-title"><?php the_time('j F Y'); ?> 发表的文章</h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="archive-title"><?php the_time('F Y'); ?> 发表的文章</h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="archive-title"><?php the_time('Y'); ?> 发表的文章</h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="archive-title">此作者的所有文章</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="archive-title">博客存档</h2>
 	  <?php } ?>
 	  
 	  <?php if ( is_user_logged_in() ) { ?>
  		<div class="push-new-post">
  			<a href="<?php echo get_settings('home'); ?>/wp-admin/post-new.php" class="#">发布新帖</a>
  		</div>
 	  <?php } ?>
 	  
 	</div>

<?php while (have_posts()) : the_post(); ?>

		<section class="pub-main lz-board">
			<div class="single-pub clearfix">	
				<div class="avatar">
					<?php echo get_avatar(get_the_author_id(), 50 ); ?>
				</div>
				<h4 class="title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="阅读全文 <?php the_title(); ?>" ><?php the_title(); ?></a>
				</h4>
				<div class="author"><span class="name"><?php the_author_link(); ?></span><span class="cat"><i class="icon-chevron-right"></i><?php the_category(', ') ?></span></span> <i class="icon-time"></i> <?php echo get_the_date() ?></div>
			</div>
			<div class="board-meta clearfix"><span class="views"><i class="icon-eye-open"></i><?php if(function_exists('the_views')) { the_views(); } ?></span><span class="num"><i class="icon-comment"></i><?php comments_popup_link('0', '1', '% '); ?></span></div>
		</section>
		
<?php endwhile; ?>
								
<?php else : ?>
	
		<div class="article">
			<h3 class="no-entry">暂无内容</h3>
		</div><!-- end article -->
	
<?php endif; ?>

	<div class="pager clearfix">
		<?php if(function_exists('wp_page_numbers')) : ?>
			<?php wp_page_numbers(); ?>
		<?php else : ?>
		<span class="previous"><?php next_posts_link('&larr; 前几篇') ?></span>
		<span class="next"><?php previous_posts_link('后几篇 &rarr;') ?></span>
		<?php endif; ?>
	</div>
	
</div><!-- end .main-board -->
	
<?php get_footer(); ?>