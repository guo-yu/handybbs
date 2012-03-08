<?php get_header(); ?>

<div class="post grid_8">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
		
		<div class="article">
			<h3 class="article-title"><?php the_title(); ?></h3>
	        <div class="byline clearfix">
	            <span class="time"><?php the_date('','','') ?></span>
	            <span class="cat"><?php the_category(', ') ?></span>
	            <span class="topcom"><?php comments_popup_link('暂无讨论', '1 评论', '% 评论'); ?></span>
	        </div>
			<div class="entry" id="article-entry-<?php the_ID(); ?>">
				<?php the_content(); ?>
				<div class="tag-list"><?php the_tags(' ', '  ', ''); ?></div>
			</div>
			<?php comments_template(); ?>
		</div>
		
<?php endwhile; ?>
								
<?php else : ?>
	
		<div class="article">
			<h3>暂无内容</h3>
		</div><!-- end article -->
	
<?php endif; ?>

		<div class="single-pager clearfix">
			<div class="previous"><?php previous_post_link('%link') ?></div>
			<div class="next"><?php next_post_link('%link') ?> </div>
		</div>
	</div><!-- end post -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>