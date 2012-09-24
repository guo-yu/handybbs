<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
	?>
			
		<p class="center"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
				
<?php	return; } }


	/* Function for seperating comments from track- and pingbacks. */
	function k2_comment_type_detection($commenttxt = 'Comment', $trackbacktxt = 'Trackback', $pingbacktxt = 'Pingback') {
		global $comment;
		if (preg_match('|trackback|', $comment->comment_type))
			return $trackbacktxt;
		elseif (preg_match('|pingback|', $comment->comment_type))
			return $pingbacktxt;
		else
			return $commenttxt;
	}

	$templatedir = get_bloginfo('template_directory');
	
	$comment_number = 1;
?>

<!-- You can start editing here. -->

<?php if (($comments) or ('open' == $post-> comment_status)) { ?>

		<?php if ($comments) { ?>
	
			<?php $count_pings = 1; foreach ($comments as $comment) { ?>
		
	        <div class="single-comment clearfix">
	        		<div class="single-avatar">
					<?php echo get_avatar( $comment, 50 ); ?>
					</div>
					<div class="comment-meta"><?php comment_author_link() ?> 在 <?php comment_date() ?> 说：</div>
					<div class="text"><?php comment_text() ?></div>
					<?php if ($comment->comment_approved == '0') : ?>
					<p>由于某些原因，您的评论正等待审核。</p>
					<?php endif; ?>
			</div>
			<?php $comment_number++; } /* end for each comment */ ?>
	
		<?php } else { // this is displayed if there are no comments so far ?>
	
			<?php if ('open' == $post-> comment_status) { ?> 
			<!-- If comments are open, but there are no comments. -->
			
			<?php } else { // comments are closed ?>
	
				<!-- If comments are closed. -->
	
				<?php if (is_single) { // To hide comments entirely on Pages without comments ?>
				
	    	<p>评论被关闭。</p>
	
				<?php } ?>
		
			<?php } ?>
	
		<?php } ?>
		
	<!-- Comment Form -->
	
	<div class="comments-wrap clearfix">
	
		<?php if ('open' == $post-> comment_status) : ?>
		
			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		
				<div class="not-login">你必须 <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登录</a> 才能评论</div>
		
			<?php else : ?>
	
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment_form" class="com-form clearfix">
				
				<?php if ( $user_ID ) { ?>
		
					<div class="login-meta">登入为 <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> | <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">登出 &raquo;</a></div>
		
				<?php } ?>
				<?php if ( !$user_ID ) { ?>
				<div class="user-meta clearfix">
					<p><label for="author">昵称</label><input class="form-text meta-author" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" /></p>
					<p><label for="email">电邮</label><input class="form-text meta-mail" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" /></p>
					<p><label for="url">个站</label><input class="form-text meta-site" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" /></p>
				</div>
				<?php } ?>
					<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->
					
					<div class="ta-wrap">
						<textarea class="form-text form-ta" name="comment" id="comment" cols="7" rows="7" tabindex="4" placeholder="说点什么......"></textarea>
					</div>
				
					<?php if (function_exists('show_subscription_checkbox')) { show_subscription_checkbox(); } ?>
				
					<div class="submit-btn">
						<input name="submit" class="form-submit" type="submit" id="submit" tabindex="5" value="贴上去" />
						<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
					</div>
			
					<?php do_action('comment_form', $post->ID); ?>
		
				</form>
	
			<?php endif; // If registration required and not logged in ?>
	
	</div>

    
<?php endif; // if you delete this the sky will fall on your head ?>

<?php } ?>