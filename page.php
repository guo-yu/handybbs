<?php get_header(); ?>

<div class="post grid_9">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
		
		<div class="article">
			<h3 class="page-title"><?php the_title(); ?></h3>
			<div class="entry" id="article-entry-<?php the_ID(); ?>">
				<?php the_content(); ?>
			</div>
			<?php comments_template(); ?>
		</div>
		
<?php endwhile; ?>
								
<?php else : ?>
	
		<div class="article">
			<h3 class="no-entry">暂无内容</h3>
		</div><!-- end article -->
	
<?php endif; ?>

	</div><!-- end post -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>