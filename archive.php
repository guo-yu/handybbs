<?php get_header(); ?>

<div class="post grid_9">
	
<?php if (have_posts()) : ?>

 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="archive-title"><?php single_cat_title(); ?> 下的所有文章</h2>
		<p class="archive-cat-des"><?php echo category_description(); ?></p>
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

<?php while (have_posts()) : the_post(); ?>

		<div class="article">
			<h3 class="article-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="阅读全文 <?php the_title(); ?>" ><?php the_title(); ?></a>
			</h3>
		    <div class="byline clearfix">
		        <span class="time"><?php the_date('','','') ?></span>
		        <span class="cat"><?php the_category(', ') ?></span>
		        <span class="topcom"><?php comments_popup_link('暂无讨论', '1 评论', '% 评论'); ?></span>
		    </div>
			<div class="entry">
				<p class="article-info">
					<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 260,"..."); ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">(阅读全文)</a>
				</p>
			</div>
		</div>
		
<?php endwhile; ?>
								
<?php else : ?>
	
		<div class="article">
			<h3 class="no-entry">暂无内容</h3>
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
