<?php get_header();

	if (have_posts()) {
		echo '<h2 class="h2head">'.__('Search Results', 'kubrick').'</h2>';
		echo '<div class="nav">';
			echo '<div class="left">';
				next_posts_link(__('&laquo; Older Entries', 'kubrick'));
			echo '</div>';
			echo '<div class="right">';
				previous_posts_link(__('Newer Entries &raquo;', 'kubrick'));
			echo '</div>';
			echo '<div class="clear"></div>';
		echo '</div>';

		while (have_posts()) {
			the_post();
			echo '<div class="news">';
				echo '<div class="top"><h3 id="post-';
						the_ID();
					echo '"><a href="';
						the_permalink();
					echo '" rel="bookmark" title="';
						printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0'));
					echo '">';
						the_title();
					echo '</a>';
					echo '<span>&nbsp; ';
						the_time('l, F jS, Y');
					echo '</span>';
				echo '</h3></div>';
				echo '<div class="midTop"></div>';
				echo '<div class="mid">';
					the_content('&raquo; Read the rest of this entry');
				echo '</div>';
				echo '<div class="midBot"></div>';
				echo '<div class="bot">';
					the_tags(__('Tags:', 'kubrick') . ' ', ', ', '<br />');
					printf(__('Posted in %s', 'kubrick'), get_the_category_list(', '));
					echo ' | ';
					edit_post_link(__('Edit', 'kubrick'), '', ' | ');
					comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') );
				echo '</div>';
			echo '</div>';
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
	} else {
		echo '<h2 class="h2head">'.__('No posts found. Try a different search?', 'kubrick').'</h2><br />';
		include (TEMPLATEPATH . '/searchform.php');
	}

	get_sidebar();
	get_footer();
?>