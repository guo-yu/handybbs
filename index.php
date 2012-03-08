<?php get_header(); ?>

<div class="post grid_9">
	
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
		
		<div class="article">
			<h3 class="article-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="阅读全文 <?php the_title(); ?>" ><?php the_title(); ?></a>
			</h3>
	        <div class="byline clearfix">
	            <span class="time"><?php the_date('','','') ?></span> |
	            <span class="cat"><?php the_category(', ') ?></span> |
	            <span class="topcom"><?php comments_popup_link('暂无讨论', '1 评论', '% 评论'); ?></span>
	        </div>
        	<div class="entry post-reset">
				<!--<p class="article-info">
					<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 260,"..."); ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">(阅读全文)</a>
				</p>-->
				<?php the_content(); ?>
			</div>
		</div>
		
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
	
	</div><!-- end post -->
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>