<?php get_header(); ?>

<div class="entry radius5 clearfix">
	<div class="post post-reset grid_9 radius5">
	
<?php if (have_posts()) : ?>

 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h3 class="pagetitle"><?php single_cat_title(); ?> 下的所有文章</h2>
		<p class="pagedes"><?php echo category_description(); ?></p>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h3 class="pagetitle">标签为 <?php single_tag_title(); ?> 的所有文章</h3>
		<div class="tag-des"><?php echo tag_description(); ?></div>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h3 class="pagetitle"><?php the_time('j F Y'); ?> 发表的文章</h3>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h3 class="pagetitle"><?php the_time('F Y'); ?> 发表的文章</h3>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h3 class="pagetitle"><?php the_time('Y'); ?> 发表的文章</h3>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h3 class="pagetitle">此作者的所有文章</h3>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h3 class="pagetitle">博客存档</h3>
 	  <?php } ?>

<?php while (have_posts()) : the_post(); ?>

		<h3 class="index-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="阅读全文 <?php the_title(); ?>" ><?php the_title(); ?></a></h3>
        <div class="byline index-byline">
            <span class="time"><?php the_date('','','') ?></span>
            <span class="topcom"><?php comments_popup_link('暂无讨论', '1 评论', '% 评论'); ?></span>
            <span class="cat"><?php the_category(', ') ?></span>
            <span class="views"><?php if(function_exists('the_views')) { the_views(); } ?></span>
        </div>
		
		<div class="article" id="article-<?php the_ID(); ?>">
            <?php if(function_exists('wp_thumbnails_for_homepage')) { wp_thumbnails_for_homepage(); } ?>
			<p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 260,"..."); ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">(阅读全文)</a></p>
		</div>
		
<?php endwhile; ?>
								
<?php else : ?>
	
		<div class="article">
			<h3>还没文章呢</h3>
			<p>抱歉，您查看的页面还没有文章。</p>
		</div><!-- end article -->
	
<?php endif; ?>

	<div class="postnoline clearfix">
		<?php if(function_exists('wp_page_numbers')) : ?>
		<?php wp_page_numbers(); ?>
		<?php else : ?>
		<span class="previous"><?php next_posts_link('&larr; 前几篇') ?></span>
		<span class="next"><?php previous_posts_link('后几篇 &rarr;') ?></span>
		<?php endif; ?>
	</div>
	
	</div><!-- end post -->
	<?php get_sidebar(); ?>
	
</div><!-- end entry -->

<?php get_footer(); ?>
