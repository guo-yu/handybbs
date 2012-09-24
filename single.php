<?php get_header(); ?>

<div class="main-board board grid_9">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
		
		<section class="pub-main lz-board">
			<div class="single-pub clearfix">	
				<div class="avatar">
					<?php echo get_avatar(get_the_author_id(), 50 ); ?>
				</div>
				<h4 class="title"><?php the_title(); ?></h4>
				<div class="author"><span class="name"><?php the_author_link(); ?></span><span class="cat"><i class="icon-chevron-right"></i><?php the_category(', ') ?></span> <i class="icon-time"></i> <?php the_date('','','') ?></div>
				<div class="desc">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
		
		<div class="board-meta clearfix"><span class="views"><i class="icon-eye-open"></i><?php if(function_exists('the_views')) { the_views(); } ?></span><span class="num"><i class="icon-comment"></i><?php comments_popup_link('0', '1', '%'); ?></span><span class="add-com-btn"><i class="icon-share-alt"></i><a href="#reply">回应</a></span></div>
		
		<section class="board comment-board clearfix">
			<?php comments_template(); ?>
		</section>
		
<?php endwhile; ?>
								
<?php else : ?>
	
		<div class="article">
			<h3 class="no-entry">暂无内容</h3>
		</div><!-- end article -->
	
<?php endif; ?>
	
</div><!-- end .main-board -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>