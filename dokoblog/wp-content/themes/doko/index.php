<?php
	/*get_header();*/ 
	
	/*echo'<div id="wrapper">';*/
	/*echo'<div id="content">';*/
	/*commented thingy to save for git*/

	if(have_posts()) {
		while(have_posts()) {
			the_post();
			?>
			<div class="news" id="post-<?php the_ID(); ?>">
				<div class="top"><h2 class="enigmatic2">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a>
					<span>&nbsp; <?php the_time(__('F jS, Y', 'kubrick')); /* --- uncomment for editor info --- echo ' by '; the_author(); */ ?></span>
				</h2></div>
				<div class="midTop"></div>
				<div class="mid">
					<?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>
				</div>
				<div class="midBot"></div>
				<div class="bot">
					<?php 
						the_tags(__('Tags:', 'kubrick') . ' ', ', ', '<br />');
						printf(__('Posted in %s', 'kubrick'), get_the_category_list(', '));
						echo ' | ';
						edit_post_link(__('Edit', 'kubrick'), '', ' | ');
						comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') );
					?>
				</div>
			</div>
			<?php
		}
		echo '<div class="nav">';
			echo '<div class="left">';
				next_posts_link(__('&laquo; Older Entries', 'kubrick'));
			echo '</div>';
			echo '<div class="right">';
				previous_posts_link(__('Newer Entries &raquo;', 'kubrick'));
			echo '</div>';
			echo '<div class="clear"></div>';
		echo '</div>';
	}/*end the Loop */
	
	
	
	else {
		echo '<h2 class="error1">'.__('Not Found', 'kubrick').'</h2>';
		echo '<p class="error2">'.__('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick').'</p>';
		include (TEMPLATEPATH . "/searchform.php"); 
	}
	
	get_sidebar();
	
	get_footer();
	

?>
