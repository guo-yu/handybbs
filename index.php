<?php get_header(); ?>

<div class="main-board board index-board grid_9">
	
<?php if (have_posts()) : ?>

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
	
		<div class="not-found">
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

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>